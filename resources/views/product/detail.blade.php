@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('title', 'Product Detail Page')

@section('content')
    <div class="container">
        <p>Trang chủ => Danh sách sản phẩm => Chi tiết sản phẩm</p>
    </div>
   <div class="container">
        <div class="flex-detail">
            <div class="container-detail">
                <img class="img_1" src="{{ Storage::url($post->image_main) }}" alt="img_main">
            </div>
            <div class="slider_bar">
                {{-- {{ dd($postSlider->title) }} --}}
                <h2>{{ !empty($postSlider->title) ? $postSlider->title : "" }}</h2>
                <p>{{ !empty($postSlider->content) ? $postSlider->content : "" }}</p>
                <p class="flex-detail-sliderbar"> <img src="/images/Category.png" alt="Profile"> Sản phẩm: {{ !empty($postSlider->customer) ? $postSlider->name : "" }} </p>
                <p class="flex-detail-sliderbar"> <img src="/images/Bookmark.png" alt="Profile"> Tag: {{ !empty($postSlider->tag) ? $postSlider->tag : "" }} </p>
            </div>
        </div>
        <div class="container-detail">
            <h2>{{ $post->title }}</h2>
            <p class="content-detail">{{ $post->content }}</p>
        </div>
        @foreach ($postImg as $key => $value)

            <div class="container-detail">
                <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main">
                <h2>{{ $value->title }}</h2>
                <p class="content-detail">{{ $value->content }}</p>
            </div>

        @endforeach
      
            <div class="container">
                <div class="product_grid_img">
                    @foreach ( $post_3 as $k => $v)
                    <div class="project_img">
                        <img src="{{ Storage::url($v->image_main) }}" alt="image_product_{{ $k }}">
                        <p>{{ $v->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
    
   </div>
@endsection