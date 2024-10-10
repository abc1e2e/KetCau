@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Chỉnh Sửa Ảnh Cho Bài Viết</h1>
        
        <form action="{{ route('admin.postImgs.update', $postImg->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="post" class="form-label">Bài viết</label>
                <select id="post_id" name="post_id" class="form-control" required>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}" {{ old('post_id', $postImg->post_id) == $post->id ? 'selected' : '' }}>
                            {{ $post->title }}
                        </option>
                    @endforeach
                </select>
                @error('post_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Tiêu Đề</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $postImg->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Nội Dung</label>
                <textarea id="content" name="content" rows="5" required>{{ old('content', $postImg->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="image" class="form-label">Ảnh nội dung</label>
                @if($postImg->image)
                    <div>
                        <img src="{{ asset('storage/' . $postImg->image) }}" alt="Current Image" style="width: 150px; height: auto;">
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="{{ route('admin.postImgs.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection