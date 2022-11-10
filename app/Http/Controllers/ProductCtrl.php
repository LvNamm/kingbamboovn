<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interface_color;
use App\Models\Category;

class ProductCtrl extends Controller
{
    public function show($product){
        $interfaceColor = Interface_color::orderBy('id', 'DESC')->get()->first();
        $categories = Category::orderBy('priority')->get();
        return view("product",["interfaceColor"=>$interfaceColor,"categories"=>$categories]);
    }
}
