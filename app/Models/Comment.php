<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'post_id', 'name', 'email', 'phone'];

    // Comment belongs to one post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
