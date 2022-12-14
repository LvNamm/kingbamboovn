<?php

namespace App\Http\Controllers\Admin;

use App\Models\ImgProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class ProductAdminCtrl extends Authentication
{

    public function index(Request $request){
        if (!$this->authentication($request))
            return redirect("/admin/login");
        $products = Product::all();
        return view("admin.product",["products"=>$products]);
    }

    public function create(Request $request)
    {
        if (!$this->authentication($request))
            return redirect("/admin/login");
        return view("admin.create_product");
    }

    public function add(Request $request)
    {
        if (!$this->authentication($request))
            return redirect("/admin/login");

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => "mimes:jpeg,jpg,png,gif|required|max:10000",
            'sku' => 'required',
            'fabrics' => 'required',
            'export' => 'required',
            'pack' => 'required',
            'uses' => 'required',
            'describe' => 'required',
            'note' => 'required',
            'classify'=>'required'
        ]);
        $describe = $request->describe;
        $describe = explode("\n",$describe);
        $s=$describe[0];
        for($i=1;$i<count($describe);$i++)
            $s = $s.'<br>'.$describe[$i];
        
        $s = str_replace("\r","",$s);
        
        $product = $request->except(['_token', 'category', 'image', 'photos']);
        $nameFileImage = $this->convert_name($product['title']) . "_" . uniqid() . "." . $request->file('image')->extension();
        $product['url_img'] = "/images/products/avata/" . $nameFileImage;
        $product['created_by']  = $request->session()->get('user-login');
        $product['describe'] = $s;
        
        Product::create($product);
        $request->file('image')->move('images/products/avata', $nameFileImage);
        $product = Product::where("title",$product['title'])->first();
        $imageOfProduct = array();
        foreach($request->photos as $image){
            $nameFileImage = $this->convert_name($product->title). "_" . uniqid() . "." . $image->extension();
            $imgProduct = new ImgProduct();
            $imgProduct->url_img = "/images/products/productimg/".$nameFileImage;
            array_push($imageOfProduct,$imgProduct);
            $image->move('images/products/productimg', $nameFileImage);
        }
        $product->img()->saveMany($imageOfProduct);
        $categories = explode(",", $request->categories); 
        for($i=0;$i<count($categories);$i++){
            $categories[$i] = (int) $categories[$i];
        }
        $product->categories()->sync($categories);
        session(['create-product-sucess' => 'Th??m m???i th??nh c??ng']);
        return redirect("/admin/create-product");
       
    }

    public function delete(Request $request, $id){
        if (!$this->authentication($request))
            return redirect("/admin/login");
        $product = Product::find($id);
        if (File::exists(public_path($product->url_img))) {
            File::delete(public_path($product->url_img));
            
        }
        foreach($product->img()->get() as $img){
            if (File::exists(public_path($img->url_img))) {
                File::delete(public_path($img->url_img));
            }
        }
        $product->categories()->detach();
        $product->img()->delete();
        $product->delete();
        return redirect("/admin/product");
    }

    function convert_name($str) {
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'a', $str);
		$str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'e', $str);
		$str = preg_replace("/(??|??|???|???|??)/", 'i', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'o', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'u', $str);
		$str = preg_replace("/(???|??|???|???|???)/", 'y', $str);
		$str = preg_replace("/(??)/", 'd', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'A', $str);
		$str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'E', $str);
		$str = preg_replace("/(??|??|???|???|??)/", 'I', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'O', $str);
		$str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'U', $str);
		$str = preg_replace("/(???|??|???|???|???)/", 'Y', $str);
		$str = preg_replace("/(??)/", 'D', $str);
		$str = preg_replace("/(\???|\???|\???|\???|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '_', $str);
		$str = preg_replace("/( )/", '_', $str);
		return $str;
	}
}
