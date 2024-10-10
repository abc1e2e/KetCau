@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">
@endsection

@section('title', 'Project Page')

@section('content')
    <div class="container">
        <p class="p_new_1">Trang chủ <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Tin Tức
            <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp">Chi tiết dự án</p>
    </div>
   <div class="container">
        <div style="width: 100%">   
            <img style="width: 100%" src="{{ Storage::url($post->image_main) }}" alt="img_main">
        </div>
        <div class="grid5">
            @foreach ($postImg as $key => $value)

                
                    <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main">

            @endforeach
        </div>
        <div> 
            <pre class="pre_project"> {{ $post->content}}</pre>
        </div>
      
            <div class="container">
                <div>
                    <h2 class="project_detail_h2">Dự án nổi bật</h2>
                </div>
                <div class="project_grid_img">
                    @foreach ( $post_3 as $k => $v)
                    <div class="project_img">
                        <img src="{{ Storage::url($v->image_main) }}" alt="image_project_{{ $k }}">
                        <p>{{ $v->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
    
   </div>
@endsection