<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interface_color;
use App\Models\Category;
use App\Models\Product;

class ProductCtrl extends Controller
{
    public function show($title){
        $interfaceColor = Interface_color::orderBy('id', 'DESC')->get()->first();
        $categories = Category::orderBy('priority')->get();
        $product = Product::where('title',$title)->first();
        return view("product",["interfaceColor"=>$interfaceColor,"categories"=>$categories,"product"=>$product]);
    }
}
