<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category'])->paginate(10); // Phân trang với 10 bài viết mỗi trang
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {   $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);
        $imagePath = '';
        $imageMain = '';
        if ($request->hasFile('image')) {
            $imageMain = $request->file('image')->store('images', 'public');
            Storage::path($imageMain);
        }
        // dd($imageMain);
        $post = Post::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image_main' => $imageMain,
            'category_id' => $request->get('category_id')
            
        ]);

        // if ($request->hasFile('image_content')) {
        // // dd($request->file('image_content'));
        //     foreach ($request->file('image_content') as $image) {
        //         // dd($image);
        //         $imagePath = $image->store('images/content', 'public');
        //         Storage::path($imagePath);
        //         PostImg::create([
        //             'post_id' => $post->id,
        //             'image' => $imagePath,
        //             'content' => $request->get('content_2'),
        //             'title' => $request->get('title_2'),
        //         ]);
        //     }
        // }
        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {   $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);

        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($post->image && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }
            $image = $request->file('image');
            $post->image_main = $image->store('images', 'public');
        }
      // Xử lý nhiều hình ảnh nội dung
        // if ($request->hasFile('image_content')) {
        //     // Xóa các hình ảnh cũ nếu có
        //     $post->files()->each(function ($file) {
        //         if (Storage::exists($file->file_path)) {
        //             Storage::delete($file->file_path);
        //         }
        //         $file->delete();
        //     });

        //     foreach ($request->file('image_content') as $image) {
        //         $imagePath = $image->store('images/content', 'public');
        //         $post->files()->create(['file_path' => $imagePath]);
        //     }
        // }
        $post->update($request->all());
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}
