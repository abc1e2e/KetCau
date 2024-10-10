@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/question.css') }}">
@endsection

@section('title', 'Question Page')

@section('content')
    <div class="question_bg_1">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Câu hỏi thường gặp</p>
                <hr>
                <p class="p_bg_2"> Trang chủ <img src="img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Câu hỏi thường gặp </p>
            </div>
        </div>
    </div>
    <div class="container_question">
        <ol class="menu_ol">
            <li>
                <h2 class="question_cs">SOHACO cung cấp những loại sản phẩm và dịch vụ nào?  <img src="images/plus-sign_1.png" alt="plus-sign_1.png"> </h2>
                <p class="p_introduce">
                    SOHACO chuyên sản xuất các cấu kiện kim loại, nhà thép tiền chế, các sản phẩm ngành cơ khí, cũng như gia công và lắp đặt máy móc công nghiệp.
                </p>
            </li>
            <li>
                <p class="question_cs">Quy trình sản xuất và lắp đặt nhà thép tiền chế của SOHACO diễn ra như thế nào? <img src="images/plus-sign.png" alt="plus-sign.png">   </p>
            </li>
            <li>
                <p class="question_cs">SOHACO có cung cấp dịch vụ tùy chỉnh sản phẩm theo yêu cầu không?<img src="images/plus-sign.png" alt="plus-sign.png">  </p>
            </li>
            <li>
                <p class="question_cs">Thời gian hoàn thành dự án gia công và lắp đặt máy móc công nghiệp là bao lâu?<img src="images/plus-sign.png" alt="plus-sign.png"></p>
            </li>
            <li>
                <p class="question_cs">Làm thế nào để yêu cầu báo giá cho các sản phẩm và dịch vụ của SOHACO?<img src="images/plus-sign.png" alt="plus-sign.png"></p>
            </li>
        </ol>
    </div>

@endsection