<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }

}
