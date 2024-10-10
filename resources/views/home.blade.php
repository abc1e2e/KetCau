@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title', 'Home Page')

@section('content')
    <div class="bg_image_1">
        <p class="p_bg_1">Chúng tôi cung cấp giải pháp <br>
            xây dựng bền vững và chất lượng cao.</p>
    </div>
    <div>
        <div class="container">
            <div>
                <h2 class="h2_section_2">Sản phẩm của chúng tôi</h2>
                <p class="p_section_2">Chúng tôi cung cấp đa dạng các sản phẩm vật liệu xây dựng với chất lượng vượt trội, <br>
                    đáp ứng mọi yêu cầu khắt khe của thị trường</p>
            </div>
            <div class="image-container">
              
                    @foreach ($product as $key => $item)
                        <div>
                            <img src="{{ Storage::url($item->image_main) }}" alt="product{{ $key }}">
                            <p class="home_project_p">{{$item->title}}</p>
                        </div>
                    @endforeach
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
                    Về chúng tôi
                </h2>
                <p>Công ty vật liệu xây dựng của chúng tôi luôn cam kết <br>
                    mang đến chất lượng tốt nhất cho mọi công trình</p>
                <p>Sohaco là một trong những doanh nghiệp hàng đầu về cung cấp
                    các sản phẩm kết cấu thép tại Việt Nam. Được thành lập từ năm
                    2020, chúng tôi không ngừng sáng tạo, đổi mới và mang đến các 
                    giải pháp hiệu quả trong lĩnh vực sản xuất thép. Với sự tận tâm và
                     uy tín, Sohaco đã khẳng định được vị thế dẫn đầu trong ngành</p>

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
            </div>
        </div>
    </div>
    <div class="container mb-20">
        <div>
            <h2 class="h2_section_2">Dự án</h2>
            <p class="p_section_2">Thành công của chúng tôi được đo bằng sự hài lòng của khách hàng trong các dự án thực tế</p>
        </div>
        <div class="grid-section">
            @foreach ($project as $k => $v)
                <div>
                    <h2 class="home_project_h2">0{{$k +1}}</h2>
                    <hr>
                    <p class="home_project_p">{{ $v->title}}</p>
                    <img src="{{ Storage::url($item->image_main) }}" alt="project{{ $k }}">
                </div>
            @endforeach
        </div>
        <div class="flex_section_5">
            <div class="btn_more">
                <a href="/project">Xem thêm</a>
            </div>
        </div>
    </div>
    <div class="bg_image_3">
        <div class="container grid2">
            <div class="pt-80">
                <h2 class="contact_p_2">
                    Liên hệ với chúng tôi
                </h2>
                <p class="contact_p_1">
                    Đừng ngần ngại liên hệ với chúng tôi để nhận tư vấn <br>
                    và giải pháp tốt nhất cho dự án của bạn
                </p>
            </div>
            <div class="pt-80">
                <form action="">
                    <div>
                        <input id="name" name="name" type="text" placeholder="Họ và tên">
                    </div>
                    <div>
                        <input id="phone" name="phone" type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div>
                        <textarea id="content" name="content" placeholder="Để lại lời nhắn cho chúng tôi" style="width: 100%; height: 200px; box-sizing: border-box;"></textarea>
                    </div>
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div>
            <h2 class="h2_section_2">Tin Tức</h2>
            <p class="p_section_2">Cập nhật tin tức xây dựng trong năm nay</p>
        </div>
        <div class="grid2">
            @foreach ($news as $keyNew => $valueNew)
                <div>
                    <div>
                        <img style="width: 100%" src="{{ Storage::url($valueNew->image_main) }}" alt="product{{ $keyNew }}">
                        <p class="home_project_p">{{$valueNew->title}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex_section_5">
            <div class="btn_more">
                <a href="/news">Xem thêm</a>
            </div>
        </div>
    </div>
@endsection
