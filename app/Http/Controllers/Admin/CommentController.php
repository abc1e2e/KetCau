<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function ajaxcomment(Request $request){
        $param = $request->all();
        $comment = Comment::create($param);
        $data = [
            'status' => 'success',
            'message' => 'Dữ liệu đã được trả về thành công',
            'data' => $comment->toArray()
        ];
         return response()->json($data);
    }


    public function index()
    {
        $comments = Comment::with(['post'])->paginate(10); // Phân trang với 10 bài viết mỗi trang
        return view('admin.comments.index', compact('comments'));
    }



}
