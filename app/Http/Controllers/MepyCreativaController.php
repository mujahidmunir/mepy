<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MepyCreativaController extends Controller
{
    public function index(){
        return view('creativa.index');
    }

    public function detail($id){
        return view('creativa.detail');
    }
}
