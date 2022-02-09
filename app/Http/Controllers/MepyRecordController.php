<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MepyRecordController extends Controller
{
    public function index(){
        return view('record.index');
    }
    public function detail($id){
        return view('record.detail');
    }
}
