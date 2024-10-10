@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('title', 'Product Detail Page')

@section('content')
    <div class="container">
        <p class="p_new_1"> Trang chủ  <img src="../../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp">Sản phẩm <img src="../../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Vật liệu xây dựng</p>
    </div>

    <div class="container about_div_2">

        <h2 class="h2_first">{{ $post->title }}</h2>
        <p class="p_first">{{ $post->content }}</p>

        <img class="img_1" src="{{ Storage::url($post->image_main) }}" alt="img_main">

        @foreach ($postImg as $key => $value)
            <ol class="menu_ol">
                <li class="h2_content">
                    {{ $value->title }}
                </li>

            </ol>
            <div>
                <p class="content-detail">{{ $value->content }}</p>
                @if ($key == 4)
                    <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main">
                @endif
                {{-- <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main"> --}}
            </div>
        @endforeach
    </div>

@endsection
