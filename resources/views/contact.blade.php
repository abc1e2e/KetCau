@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('title', 'contact Page')

@section('content')
    <div class="contact_bg_1">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Liên hệ</p>
                <hr>
                <p class="p_bg_2"> Trang chủ <img src="img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Liên hệ
            </div>
        </div>
           
    </div>
    <div class="about_div_2 container">
        <div>
            <h2>Liên hệ với chúng tôi</h2>
            <p>Đừng ngần ngại liên hệ với chúng tôi để nhận tư vấn </p>
            <p> và giải pháp tốt nhất cho dự án của bạn</p>
        </div>
        <div class="form_contact">
            <form action="">
                <div>
                    <input id="name" name="name" type="text" placeholder="Họ và tên">
                </div>
                <div>
                    <input id="phone" name="phone" type="text" placeholder="Nhập số điện thoại">
                </div>
                <div>
                    <textarea id="content" name="content" placeholder="Để lại lời nhắn cho chúng tôi"
                        style="width: 100%; height: 200px;"></textarea>
                </div>
                <input type="submit" value="Gửi">
            </form>
        </div>
    </div>
    

@endsection