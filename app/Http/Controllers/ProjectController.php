<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImg;
use App\Models\SliderBar;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $posts = Post::where('category_id', 2)->orderBy('id','DESC')->paginate(9);
        return view('project.index',compact('posts'));
    }

    public function detail($id){
        $post = Post::where('id', $id)->first();
        $postImg = PostImg::where('post_id', $id)->get();
        $postSlider = SliderBar::where('post_id', $id)->orderBy('id','DESC')->first();
        // dd($postSlider);
        $post_3 = Post::where('category_id',2)->orderBy('id','DESC')->limit(3)->get(); 
        return view('project.detail', compact(['post','postImg','postSlider','post_3']));
    }
}
