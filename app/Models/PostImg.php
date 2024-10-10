<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImg extends Model
{
    protected $table = 'post_img';
    protected $fillable = ['post_id', 'image', 'content', 'title'];

    // Post belongs to one category
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
