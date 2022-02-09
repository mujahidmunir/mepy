<?php
namespace App\Helpers;

use App\Models\Category;

class Sidebar{
    public static function Menu(){
        return Category::orderBy('name', 'asc')->get();
    }
}
