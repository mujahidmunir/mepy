<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MepyTalentManagement extends Controller
{
    public function index(){
        return view('talent management.index');
    }

    public function detail($id)
    {
        return view('talent management.detail');
    }
}
