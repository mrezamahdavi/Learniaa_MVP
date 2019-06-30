<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
use App\Comment;

class PostController extends Controller
{
    public function detail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $tags = Tag::all();
 
        $comments = Comment::where('post_id', $post->id)->get();
   
        $category = Category::find($post->category_id);
        $relatedPosts = $category->posts()->get();
        return view('postDetail',compact('post','tags','relatedPosts','comments'));
    }

    public function postByTag($slug)
    {
           $tag = Tag::where('slug', $slug)->first();
           $posts = $tag->posts()->get();
           return view('index',compact('posts')) ; 
    }

    public function postByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->get();
        return view('index',compact('posts'));
    }
}
