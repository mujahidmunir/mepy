<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index (){
        $data ['slider'] = Slider::whereStatus(1)->get();
        $data ['categories'] = Category::whereNotIn('id', [1])->get();
        $data ['about'] = Article::whereId(1)->first();
        $data ['services'] = Article::whereNotIn('category_id', [1])->get();

        return view('index', $data);
    }
}
