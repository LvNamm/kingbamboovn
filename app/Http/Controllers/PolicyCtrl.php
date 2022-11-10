<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class PolicyCtrl extends Controller
{
    public function index($pt){
        $categories = Category::orderBy('priority')->get();
        return view('policy',["categories"=>$categories]);
    }
}
