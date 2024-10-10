@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Danh Sách Bình Luận</h1>
    {{-- <a href="{{ route('admin.comments.create') }}" class="btn btn-primary">Tạo Bài Viết Mới</a> --}}

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
                <th>Nội dung bình luận</th>
                <th>Tên bình luận</th>
                <th>Email bình luận</th>
                <th>Số điện thoại</th>
                <th>Ngày Tạo</th>
                {{-- <th>Hành Động</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->post_id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->phone }}</td>
                    <td>{{ $comment->created_at->format('d/m/Y') }}</td>
                    {{-- <td>
                        <a href="{{ route('admin.comments.edit', $comment->id) }}" class="btn btn-edit">Sửa</a>
                        <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="comment" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $comments->links('pagination') }} <!-- Hiển thị phân trang -->
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

