<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*
     public function __construct()
    {
        $this->middleware('auth');
    }
    */



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::get()->take(6);
        $categories = Category::get()->take(6);
        return view('index',compact('posts','categories'));
    }
}
