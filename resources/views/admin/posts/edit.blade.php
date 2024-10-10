@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Chỉnh Sửa Bài Viết</h1>
        
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="category" class="form-label">Danh mục</label>
                <select id="category" name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{  old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Tiêu Đề</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Nội Dung</label>
                <textarea id="content" name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ảnh Đại Diện</label>
                @if($post->image_main)
                    <div>
                        <img src="{{ asset('storage/' . $post->image_main) }}" alt="Current Image" style="width: 150px; height: auto;">
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection