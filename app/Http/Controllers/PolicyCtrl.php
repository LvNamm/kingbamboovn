<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyCtrl extends Controller
{
    public function index($pt){
        return view('policy');
    }
}
