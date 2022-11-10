<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryAdminCtrl extends Authentication
{
    public function index(Request $request){
        if (!$this->authentication($request))
            return redirect("/admin/login");

        $categories = Category::orderBy('priority')->get();
        return view("admin.category",["categories"=>$categories]);

    }
}
