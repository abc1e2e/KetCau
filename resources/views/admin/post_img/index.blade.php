@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Danh Sách Ảnh Cho Bài Viết</h1>
    <a href="{{ route('admin.postImgs.create') }}" class="btn btn-primary">Thêm Ảnh Cho Bài Viết </a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Id Bài Viết</th>
                <th>Tiêu Đề</th>
                <th>Ngày Tạo</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postImgs as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ !empty($post->post_id) ? $post->post_id : ""}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.postImgs.edit', $post->id) }}" class="btn btn-edit">Sửa</a>
                        <form action="{{ route('admin.postImgs.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger delete-button">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $postImgs->links('pagination') }} <!-- Hiển thị phân trang -->
</div>
@endsection


