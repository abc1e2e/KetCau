<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImg;
use App\Models\SliderBar;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexMaterial(Request $request){
        $data = $request->all();
        if(!empty($data['title'])){
            $posts = Post::where('category_id', 3)
            ->where('title','like','%'.$data['title'].'%')
            ->orderBy('id','DESC')->paginate(8);
        }else{
            $posts = Post::where('category_id', 3)->orderBy('id','DESC')->paginate(8);
        }
        // dd($posts);
        return view('product.index_materials',compact('posts'));
    }
    public function indexEquipment(Request $request){
        $data = $request->all();
        // dd($data);
        if(!empty($data['title'])){
            $posts = Post::where('category_id', 4)
            ->where('title','like','%'.$data['title'].'%')
            ->orderBy('id','DESC')->paginate(8);
        }else{
            $posts = Post::where('category_id', 4)->orderBy('id','DESC')->paginate(8);
        }
        // dd($posts);
        return view('product.index_equipment',compact('posts'));
    }

    public function steelIndex(){
  
        return view('product.steelhome');
    }
    public function structureIndex(){
  
        return view('product.structure');
    }
    public function detailIndexMaterial($id){
        $post = Post::where('id', $id)->first();
        $postImg = PostImg::where('post_id', $id)->get();
        // dd($postSlider);
        $post_3 = Post::where('category_id',3)->orderBy('id','DESC')->limit(3)->get(); 
        return view('product.materials', compact(['post','postImg','post_3']));
        
    }
    public function detailIndexEquipment($id){
        $post = Post::where('id', $id)->first();
        $postImg = PostImg::where('post_id', $id)->get();
        // dd($postSlider);
        $post_3 = Post::where('category_id',4)->orderBy('id','DESC')->limit(3)->get(); 
        return view('product.equipment', compact(['post','postImg','post_3']));
        
    }
}
