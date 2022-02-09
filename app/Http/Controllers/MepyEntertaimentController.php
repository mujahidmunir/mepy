<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MepyEntertaimentController extends Controller
{
    public function index(){
        return view('entertaiment.index');
    }

    public function detail(){
        return view('entertaiment.detail');
    }
}
