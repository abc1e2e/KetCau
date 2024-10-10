<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderBar extends Model
{
    protected $table = 'post_slider_bar';
    protected $fillable = ['post_id', 'content', 'title', 'name', 'tag','time','address', 'customer'];

    // Post belongs to one category
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
