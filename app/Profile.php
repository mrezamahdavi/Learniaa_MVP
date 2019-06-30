<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;

class Profile extends Model
{
    public function User()
    {

            return $this->belongsTo(User::class,'user_id');

    }
}
