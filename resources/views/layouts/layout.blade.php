<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- @vite('resources/css/style.css') --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="lin-h">

            <div class="container-header">
                <div class="content">
                    <img class="iconlyregularboldcall" alt="" src="../img_home/ic_call.png">
                    <div class="tlsthanglongsteelvn">Hotline: 0972.888.888</div>
                    <img class="iconlyregularboldmessage" alt="" src="../img_home/ic_mail.png">
                    <div class="tlsthanglongsteelvn">tls@thanglongsteel.vn</div>
                </div>
                <div class="ting-vit">
                   
                        <img class="lin-h-item" alt="" src="../images/9.png">
                        <p>Tiếng Việt</p>
                   
                </div>
        
            </div>
        </div>
        <nav class="container">
            <div class="flex-header-sp">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img_header_sp">
                <button class="menu-toggle">☰</button>
            </div>
            <ul class="horizontal-menu"> 
                <li class="img_header_sp_li" style="padding-right: 20px">  <img src="{{ asset('images/logo.png') }}" alt="logo"></li>
                <li><a class="link_header" href="/">Trang chủ</a></li>
                <li><a class="link_header" href="/about">Về chúng tôi</a></li>
                <li><a class="link_header" href="/project">Dự án</a></li>
                <li>
                    Sản Phẩm & Dịch Vụ
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">  <a class="link_header" href="/product/steel"> Nhà thép tiền chế </a>
                        </li>
                        <li class="dropdown-item">  <a class="link_header" href="/product/structure"> Kết cấu thép </a></li>
                        <li class="dropdown-item">  <a class="link_header" href="/product/equipment"> Máy móc </a></li>
                        <li class="dropdown-item">  <a class="link_header" href="/product/material"> Vật liệu xây dựng</a>  </li>
                    </ul>
                </li>
                <li><a class="link_header" href="/news">Tin tức</a></li>
                <li><a href="/contact" class="btn_contact">Liên hệ</a></li>
            </ul>

        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="bg-footer">
            <div class="grid-footer container">
                <div class="flex-footer"> 
                    <div  class="padding-top-footer">
                        <img src="{{ asset('images/phone.png') }}" alt="phone">
                    </div>
                    <div>
                        <p class="p_footer">Số điện thoại</p>
                        <p class="p_footer_2">(084) 123 - 456 88</p>
                    </div>
                </div>  
                <div class="flex-footer"> 
                    <div class="padding-top-footer">
                        <img src="{{ asset('images/mail.png') }}" alt="mail">
                    </div>
                    <div>
                        <p class="p_footer">Email</p>
                        <p class="p_footer_2">support@example.com</p>
                    </div>
                </div>  
                <div class="flex-footer"> 
                    <div class="padding-top-footer">
                        <img src="{{ asset('images/address.png') }}" alt="address">
                    </div>
                    <div>
                        <p class="p_footer">Địa chỉ</p>
                        <p class="p_footer_2">Tầng 11, Tòa nhà Lạc Hồng, Số 85 đường Lê Văn Lương, Phường Nhân Chính, Quận Thanh Xuân, Hà Nội</p>
                    </div>
                </div>  
            
                
            </div>  
        </div>
        <div class="container">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" >
                </div>
                <div class="text-center">
                    Chúng tôi mang đến các giải pháp bền vững và<br> 
                    chất lượng cao trong lĩnh vực kết cấu thép
                </div>
                <div class="text-center">
                    <ul class="ul-footer">
                        <li>Trang chủ</li>
                        <li>Vể chúng tôi</li>
                        <li>Danh sách dự án</li>
                        <li>Sản Phẩm</li>
                        <li>Tin Tức</li>
                    </ul>
                </div>
                <div class="flex-footer-3">
                    <img src="{{ asset('images/ic_facebook.png') }}" alt="ic_facebook">
                    <img src="{{ asset('images/ic_youtube.png') }}" alt="ic_youtube">
                    <img src="{{ asset('images/ic_tw.png') }}" alt="ic_tw">
                </div>
        </div>
        <hr>
                <div class="footer_copyright">
                    <div>
                        <p>© 2024 Bản quyền thuộc về SOHACO</p>
                    </div>
                  
                        <ul class="footer_copyright_ul">
                            <li> <a class="link_header" href="/question">Câu hỏi thường gặp</a></li>
                            <li><a class="link_header" href="/legal-infomation">Thông tin pháp lý </a></li>
                            <li><a class="link_header" href="/private-policy">Chính sách bảo mật </a></li>
                        </ul>
                
                </div>
        </div>
    </footer>
</body>
</html>
@yield('script')
<script>
    $(document).ready(function() {
        $('.menu-toggle').click(function() {
            $('.horizontal-menu').toggleClass('show');
        });
    });
</script>