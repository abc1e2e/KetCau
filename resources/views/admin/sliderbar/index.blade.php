@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Danh Sách SliderBar</h1>
    <a href="{{ route('admin.sliderbar.create') }}" class="btn btn-primary">Tạo SliderBar Mới</a>

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
                <th>Tên Danh Mục</th>
                <th>Tiêu Đề</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliderbars as $sliderbar)
                {{-- {{dd($sliderbar->created_at)}} --}}
                <tr>
                    <td>{{ $sliderbar->id }}</td>
                    <td>{{ $sliderbar->post_id }}</td>
                    <td>{{ !empty($sliderbar->post) ? $sliderbar->post->category->name : ""}}</td>
                    <td>{{ $sliderbar->title }}</td>
                    <td>{{ $sliderbar->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.sliderbar.edit', $sliderbar->id) }}" class="btn btn-edit">Sửa</a>
                        <form action="{{ route('admin.sliderbar.destroy', $sliderbar->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-button">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $sliderbars->links('pagination') }} <!-- Hiển thị phân trang -->
</div>
@endsection