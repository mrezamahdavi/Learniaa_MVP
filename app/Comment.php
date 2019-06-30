<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\User;

class Comment extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class,'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }

    public function ReplyUser()
    {
        return $this->belongsTo(User::class,'Reply_user_id','id');

    }   


}
