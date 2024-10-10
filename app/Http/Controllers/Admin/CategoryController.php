<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   // Hiển thị danh sách tất cả các danh mục
   public function index()
   {
        $categories = Category::paginate(10);
       return view('admin.categories.index', compact('categories'));
   }

   // Hiển thị form tạo danh mục mới
   public function create()
   {
       return view('admin.categories.create');
   }

   // Xử lý lưu danh mục mới vào cơ sở dữ liệu
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
       ]);

       Category::create([
           'name' => $request->name,
       ]);

       return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
   }

   // Hiển thị form chỉnh sửa danh mục
   public function edit(Category $category)
   {
       return view('admin.categories.edit', compact('category'));
   }

   // Xử lý cập nhật danh mục
   public function update(Request $request, Category $category)
   {
       $request->validate([
           'name' => 'required|string|max:255',
       ]);

       $category->update([
           'name' => $request->name,
       ]);

       return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
   }

   // Xóa danh mục
   public function destroy(Category $category)
   {
       $category->delete();
       return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
   }
}
