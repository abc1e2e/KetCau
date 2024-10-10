<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SliderBar;
use Illuminate\Http\Request;

class SliderBarController extends Controller
{
    public function index()
    {
        $sliderbars = SliderBar::with(['post'])->paginate(10); // Phân trang với 10 bài viết mỗi trang
        // dd($sliderbars);
        return view('admin.sliderbar.index', compact('sliderbars'));
    }

    public function create()
    {   $posts = Post::all();
        return view('admin.sliderbar.create', compact('posts'));
    }

    public function store(Request $request)
    {   
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);
        
        SliderBar::create($request->all());

        return redirect()->route('admin.sliderbar.index')->with('success', 'SliderBar created successfully.');
    }

    public function edit(SliderBar $sliderbar)
    {
        return view('admin.sliderbar.edit', compact('sliderbar'));
    }

    public function update(Request $request, SliderBar $sliderbar)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);

        $sliderbar->update($request->all());
        return redirect()->route('admin.sliderbar.index')->with('success', 'SliderBar updated successfully.');
    }

    public function destroy(SliderBar $sliderbar)
    {
        $sliderbar->delete();
        return redirect()->route('admin.sliderbar.index')->with('success', 'SliderBar deleted successfully.');
    }
}
