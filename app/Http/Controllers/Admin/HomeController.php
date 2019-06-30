<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Category;
use App\Post;
use App\User;


class HomeController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $tags = Tag::all()->count();
        $categories = Category::all()->count();
        $posts = Post::all()->count();


        return view('admin.home',compact('users','tags','posts','categories'));

    }
}
