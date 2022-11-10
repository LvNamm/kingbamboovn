<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interface_color;

class ProductCtrl extends Controller
{
    public function show($product){
        $interfaceColor = Interface_color::orderBy('id', 'DESC')->get()->first();
        return view("product",["interfaceColor"=>$interfaceColor]);
    }
}
