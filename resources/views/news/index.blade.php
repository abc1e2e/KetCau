@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new.css') }}">
@endsection

@section('title', 'new Page')

@section('content')
    <div class="new_bg_1 mb-20">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Tin Tức</p>
                <hr>
                <p class="p_bg_2"> Trang chủ   <img src="img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Tin Tức </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="new_grid_img">
            @foreach ( $posts as $key => $value)
                <div class="project_img">
                    <a href ="{{ route('news.detail',['id' => $value->id ]) }}" ><img src="{{ Storage::url($value->image_main) }}" alt="image_new_{{ $key }}"></a>
                    <p>{{ $value->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $posts->links('pagination') }}
    </div>
@endsection