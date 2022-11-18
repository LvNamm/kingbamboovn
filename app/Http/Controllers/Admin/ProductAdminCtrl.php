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
        ]);

        $product = $request->except(['_token', 'category', 'image', 'photos']);
        $nameFileImage = $this->convert_name($product['title']) . "_" . uniqid() . "." . $request->file('image')->extension();
        $product['url_img'] = "/images/products/avata/" . $nameFileImage;
        $product['created_by']  = $request->session()->get('user-login');
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
        session(['create-product-sucess' => 'Thêm mới thành công']);
        return redirect("/admin/create-product");
        // dd($product);
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
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '_', $str);
		$str = preg_replace("/( )/", '_', $str);
		return $str;
	}
}
