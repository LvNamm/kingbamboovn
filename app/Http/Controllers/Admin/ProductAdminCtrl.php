<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminCtrl extends Authentication
{
    public function create(Request $request){
        if (!$this->authentication($request))
            return redirect("/admin/login");
        return view("admin.create_product");
    }

    public function add(Request $request){
        if (!$this->authentication($request))
            return redirect("/admin/login");

            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'amount' => 'required',
                'image' => "mimes:jpeg,jpg,png,gif|required|max:10000",
                'sku'=> 'required',
                'fabrics'=> 'required',
                'export'=> 'required',
                'pack'=> 'required',
                'uses'=> 'required',
                'describe'=> 'required',
                'note'=> 'required',
            ]);
            $product = new Product();

    }
}
