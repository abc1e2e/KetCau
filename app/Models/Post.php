<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image_main', 'category_id'];

    // Post belongs to one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function postimg()
    {
        return $this->hasMany(PostImg::class);
    }

    public function postsliderbar()
    {
        return $this->hasOne(SliderBar::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}