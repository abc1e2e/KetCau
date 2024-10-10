<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function index(){
        $posts = Post::select('id', 'image_main')->limit('10')->get();
        $news =  Post::select('id', 'title', 'image_main')->where('category_id',5)->orderBy('id','DESC')->limit('2')->get();
        $product =  Post::select('id', 'title', 'image_main')->where('category_id',3)->orderBy('id','DESC')->limit('8')->get();
        $project =  Post::select('id', 'title', 'image_main')->where('category_id',2)->orderBy('id','DESC')->limit('3')->get();
        return view('home', compact('posts','news', 'product','project'));
    }
}
