@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Danh Sách Bài Viết</h1>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Tạo Bài Viết Mới</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Danh mục</th>
                <th>Tiêu Đề</th>
                <th>Ngày Tạo</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ !empty($post->category) ? $post->category->name : ""}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-edit">Sửa</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links('pagination') }} <!-- Hiển thị phân trang -->
</div>
@endsection

{{-- @section('script')
<script>
   $(document).ready(function() {
        // Hide the alert after 3 seconds
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 1000); // 3 seconds
    });
</script>
@endsection --}}

