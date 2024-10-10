<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostImgController extends Controller
{
    public function index()
    {
        $postImgs = PostImg::with(['post'])->paginate(10); // Phân trang với 10 bài viết mỗi trang
        return view('admin.post_img.index', compact('postImgs'));
    }

    public function create()
    {  $posts = Post::all();
        return view('admin.post_img.create',compact('posts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);

        $imageMain = '';
        if ($request->hasFile('image')) {
            $imageMain = $request->file('image')->store('images', 'public');
            Storage::path($imageMain);
        }
        // dd($imageMain);
        $postImg = PostImg::create([
            "post_id" => $request->get('post_id'),
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imageMain,
            
        ]);

        // if ($request->hasFile('image_content')) {
        // // dd($request->file('image_content'));
        //     foreach ($request->file('image_content') as $image) {
        //         // dd($image);
        //         $imagePath = $image->store('images/content', 'public');
        //         Storage::path($imagePath);
        //         postImgImg::create([
        //             'postImg_id' => $postImg->id,
        //             'image' => $imagePath,
        //             'content' => $request->get('content_2'),
        //             'title' => $request->get('title_2'),
        //         ]);
        //     }
        // }
        return redirect()->route('admin.postImgs.index')->with('success', 'postImg created successfully.');
    }

    public function edit(PostImg $postImg)
    {   $posts = Post::all();
        return view('admin.post_img.edit', compact('postImg', 'posts'));
    }

    public function update(Request $request, PostImg $postImg)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);

        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($postImg->image && Storage::exists($postImg->image)) {
                Storage::delete($postImg->image);
            }
            $image = $request->file('image');
            $postImg->image_main = $image->store('images', 'public');
        }
        $postImg->update($request->all());
        return redirect()->route('admin.postImgs.index')->with('success', 'postImg updated successfully.');
    }

    public function destroy(PostImg $postImg)
    {
        $postImg->delete();
        return redirect()->route('admin.postImgs.index')->with('success', 'postImg deleted successfully.');
    }
}
