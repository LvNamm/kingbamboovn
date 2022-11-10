<?php

namespace App\Http\Controllers;

use App\Models\Interface_color;
use Illuminate\Http\Request;

class CategoryCtrl extends Controller
{
    public function index(){
        $interfaceColor = Interface_color::orderBy('id', 'DESC')->get()->first();
        return view("index",["interfaceColor"=>$interfaceColor]);
    }

    public function showProductByCategory($category){
        $categorys  =  [
            'all'=>"Tất cả sản phẩm",
            'trang-tri-nha-cua'=>"Trang trí nhà cửa",
            'trang-tri-quan-cafe' => "Trang trí quán cafe",
            'trang-tri-van-phong' => "Trang trí văn phòng",
            'khay-dung' => "Khay đựng",
            'nha-bep' => "Nhà bếp",
            'tui-xach' => "Khay đựng",
            'gio-dung' => "Giỏ đựng"
        ];
        $interfaceColor = Interface_color::orderBy('id', 'DESC')->get()->first();
        return view("list-products-of-category",["category"=>$categorys[$category],"interfaceColor"=>$interfaceColor]);
    }

    
}
