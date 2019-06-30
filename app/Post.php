<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Tag;
use App\Comment;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');

    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class,'id','post_id');
        
    }



}
