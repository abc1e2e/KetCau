@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('title', 'About Page')

@section('content')
    <div class="about_bg_1">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Về chúng tôi</p>
                <hr>
                <p class="p_bg_2"> Trang chủ <img src="img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Về chúng tôi
            </div>
        </div>
    </div>
    <div style="background-color: #f1f3f6">
        <div class="container grid-section mb-20 pb-50 pt-50">
            <div>
                <img src="img_home/image_bg_2.png" alt="image_bg_2">
            </div>
            <div class="flex_section_2">
                <div>
                    <h2>10</h2>
                    <p>Năm kinh nghiệm</p>
                </div>
                <div>
                    <h2>105</h2>
                    <p>Nhân sự</p>
                </div>
                <div>
                    <h2>45</h2>
                    <p>Dự án</p>
                </div>
            </div>
            <div>
                <h2>
                    Chào mừng đến với Sohaco – Sự lựa chọn hàng đầu về sản phẩm kết cấu thép
                </h2>

                <p>Sohaco là một trong những doanh nghiệp hàng đầu về cung cấp các sản phẩm kết cấu thép tại Việt Nam. Được
                    thành lập từ năm 2020, chúng tôi không ngừng sáng tạo, đổi mới và mang đến các giải pháp hiệu quả trong
                    lĩnh vực sản xuất thép. Với sự tận tâm và uy tín, Sohaco đã khẳng định được vị thế dẫn đầu trong ngành
                </p>

                <div>
                    <img src="" alt="">
                    <p>Đảm bảo mọi sản phẩm đều đạt tiêu chuẩn cao nhất</p>
                </div>
                <div>
                    <img src="" alt="">
                    <p>Xây dựng niềm tin với khách hàng và đối tác</p>
                </div>
                <div>
                    <img src="" alt="">
                    <p>Không ngừng cải tiến sản phẩm và dịch vụ</p>
                </div>
                <div>
                   <button>Hồ sơ công ty</button>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #F8F9FA">
        <div class="container" >
        <div class="about_div_2"> 
                <h2>Lịch sử hình thành</h2>
                <p> Từ những ngày đầu thành lập, Sohaco không ngừng phát triển, mở rộng quy mô và khẳng định vị thế trong lĩnh vực </p>
                <p>kết cấu thép, luôn cam kết mang đến sản phẩm chất lượng và đáp ứng nhu cầu khách hàng </p>
        </div>
        <div class="image-container">
            <div class="image-container-1">
                <img src="img_about/img_item_2.png" alt="img_item_2">
                <div class="text-overlay-header">
                    <p>2020</p>
                </div>
                <div class="text-overlay-footer">
                    <p>Thành lập công ty</p>
                </div>
            </div>
            <div class="image-container-1">
                <img src="img_about/img_item_2.png" alt="img_item_2">
                <div class="text-overlay-header">
                    <p>2021</p>
                </div>
                <div class="text-overlay-footer">
                    <p>Mở rộng <br> nhà máy sản xuất</p>
                </div>
            </div>
            <div class="image-container-1">
                <img src="img_about/img_item_2.png" alt="img_item_2">
                <div class="text-overlay-header">
                    <p>2022</p>
                </div>
                <div class="text-overlay-footer">
                    <p>Hợp tác với <br>
                        các đối tác lớn</p>
                </div>
            </div>
            <div class="image-container-1">
                <img src="img_about/img_item_2.png" alt="img_item_2">
                <div class="text-overlay-header">
                    <p>2023</p>
                </div>
                <div class="text-overlay-footer">
                    <p>Dẫn đầu<br>
                        & trông các dự án lớn</p>
                </div>
            </div>

            </div>
        </div>
    </div>
    <div class="container" >
        <div class="about_div_2"> 
                <h2>Ban Lãnh Đạo</h2>
                <p> Dưới sự dẫn dắt của đội ngũ ban lãnh đạo giàu kinh nghiệm và tận tâm, SOHACO cam kết mang đến các  </p>
                <p>giải pháp công nghiệp chất lượng cao và đáp ứng mọi yêu cầu của khách hàng</p>
        </div>
        <div class="image-container">
            <div class="image-container-1">
                <img src="img_about/img_item_3.png" alt="img_item_2">
                <div class="">
                    <p>Chủ tịch HĐQT</p>
                </div>
                <div class="">
                    <p>Nguyễn Huy Hoàng</p>
                </div>
            </div>
            <div class="image-container-1">
                <img src="img_about/img_item_4.png" alt="img_item_2">
                <div class="">
                    <p>Giám đốc</p>
                </div>
                <div class="">
                    <p>Phạm Kim Chi</p>
                </div>
            </div>
            <div class="image-container-1">
                <img src="img_about/img_item_5.png" alt="img_item_2">
                <div class="">
                    <p>Phó Giám đốc Kỹ thuật</p>
                </div>
                <div class="">
                    <p>Trần Quang Khải</p>
                </div>
            </div>
            <div class="image-container-1">
                <img src="img_about/img_item_6.png" alt="img_item_2">
                <div class="">
                    <p>Phó Giám đốc Kinh doanh</p>
                </div>
                <div class="">
                    <p>Nguyễn Quang Huy</p>
                </div>
            </div>

            </div>
    </div>
  
    <div class="about_bg_3">
        <div class="about_bg_3_h2">
            <h2 class="about-h2">Đối tác & Khách hàng</h2>
            <p>Thành công của chúng tôi được đo bằng sự hài lòng của khách   </p>
            <p>hàng trong các dự án thực tế</p>
        </div>
        <div class="img_about_footer">
            <div>
                <img src="img_about/Corporate-Companies-1.png" alt="about_us_img_logo_1.png">
            </div>
            <div>
                <img src="img_about/Corporate-Companies-2.png" alt="about_us_img_logo_2.png">
            </div>
            <div>
                <img src="img_about/Corporate-Companies-3.png" alt="about_us_img_logo_3.png">
            </div>
            <div>
                <img src="img_about/Corporate-Companies-4.png" alt="about_us_img_logo_4.png">
            </div>
            <div>
                <img src="img_about/Corporate-Companies-5.png" alt="about_us_img_logo_5.png">
            </div>
            <div>
                <img src="img_about/Corporate-Companies-6.png" alt="about_us_img_logo_6.png">
            </div>
        </div>
    </div>
@endsection
