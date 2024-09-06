<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // code here
    public function home(){
        $categories = Category::all()->toArray();
        return view('welcome',compact("categories"));
    }

    public function about(){
        return view("about");
    }
}
