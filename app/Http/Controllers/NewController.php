<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostImg;
use App\Models\SliderBar;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        $posts = Post::where('category_id', 5)->orderBy('id', 'DESC')->paginate(9);
        // dd($posts);
        return view('news.index',compact('posts'));
    }

    public function detail($id){
        $post = Post::where('id', $id)->first();

        $formatedDate = $post->created_at->format('d-m-y');
        $post->formatedDate = $formatedDate;
        $postImg = PostImg::where('post_id', $id)->get();
        $comment = Comment::where('post_id', $id)->get();
        // $post_8 = Post::orderBy('id','DESC')->limit(8)->get(); 

        return view('news.detail', compact(['post','postImg', 'comment']));
    }
}
