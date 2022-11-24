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
        $product = $this->classify($product);
        return view("product",["interfaceColor"=>$interfaceColor,"categories"=>$categories,"product"=>$product]);
    }

    private function classify($product){
       
        $classify = explode(",", $product->classify);
        for($i=0;$i<count($classify);$i++){
            $classify[$i] = explode("+",$classify[$i]);
            $classify[$i][1] = $this->formatVND($classify[$i][1]);
        }
        $product->classify = $classify;
        return $product;
    }

    public function formatVND($s){
        $a = array();
        $w = '';
        for($i=strlen($s)-1;$i>=0;$i--){
            $w=$s[$i].$w;
            if(strlen($w)==3 && $i!=0){
                array_push($a, $w);
                $w = '';
            }
        }
        $s ='';
        foreach($a as $b){
            $s = ",".$b.$s;
        }

        return $w.$s;
    }
}
