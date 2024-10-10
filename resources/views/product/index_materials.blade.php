@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('title', 'product Page')

@section('content')
    <div class="product_bg_1 mb-20">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Sản phâm</p>
                <hr>
                <p class="p_bg_2"> Trang chủ  <img src="../img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Sản phẩm  <img src="../img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill">Vật liệu xây dựng</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex_material"> 
            <div>
                <h2 class="h2_first_product">Vật liệu xây dựng</h2>
            </div>
            <form id="searchForm" action="{{ route('product.indexMaterial') }}" method="GET">
                <div class="flex_material_2">
                    <div class="flex_material_1">
                        <input class="input_material_1" type="text" name="title" placeholder="Tìm kiếm"> 
                        <img class="img_material_1" id="material" src="/images/search.png" alt="search">
                    </div>
                    <div>
                        <select class="select_material_1" name="" id="">
                            <option value="">Tất cả sản phẩm</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="product_grid_img">
            @foreach ($posts as $key => $value)
                <div class="project_img">
                    <a href ="{{ route('product.detail.indexMaterial',['id' => $value->id ]) }}"><img src="{{ Storage::url($value->image_main) }}" alt="image_product_{{ $key }}"></a>
                    <p>{{ $value->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $posts->links('pagination') }}
    </div>
@endsection

@section('script')
    <script>
         $(document).ready(function() {
        $('#material').click(function() {
            $('#searchForm').submit(); 
        });
    });
    </script>
@endsection