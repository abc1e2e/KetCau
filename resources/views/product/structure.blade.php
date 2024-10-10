@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('title', 'new Page')

@section('content')
    <div class="product_bg_1 mb-20">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Sản Phẩm  </p>
                <hr>
                <p class="p_bg_2"> Trang chủ   <img src="../img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Sản phẩm  <img src="../img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Kết cấu thép</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="h2_first_product">KẾT CẤU THÉP</h2>
        <img src="../images/structure_product.png" alt="">
        <div>
            <ol class="menu_ol">
                <li>Kết cấu thép (Steel Structure) là gì ?
                    <p class="steelhome_text">
                        Kết cấu khung thép được sử dụng rộng rãi và phổ biến như: nhà kho, nhà máy, nhà xưởng công nghiệp, trung tâm thương mại, tòa nhà văn phòng, trung tâm hội nghị, các cơ sở hạ tầng giao thông như sân bay, nhà ga….Dưới đây là các loại cấu trúc điển hình:
                    </p>
                    <ul style="list-style: disc;">
                        <li class="steelhome_text">Kết cấu thép là các kết cấu được tạo thành từ các thành phần bằng thép</li>
                        <li class="steelhome_text">Được sử dụng rộng rãi trong xây dựng nhà xưởng, nhà thép tiền chế</li>
                        <li class="steelhome_text">Bao gồm các cấu kiện chính như: cột, dầm, giằng, xà gồ, vì kèo...</li>
                    </ul>
                </li>
                
                <li>
                    5 lý do bạn nên lựa chọn kết cấu thép
                    <p class="steelhome_text">
                        Do sở hữu các ưu điểm sau mà kết cấu thép trở thành loại ứng dụng được lựa chọn phổ biến sử dụng rộng rãi trong ngành xây dựng.
                    </p>
                    <ul style="list-style: disc;">
                        <li class="steelhome_text">Độ an toàn được đảm bảo</li>
                        <p class="steelhome_text">Do các cấu kiện thép được sản xuất hoàn toàn tại nhà máy. Quy trình thiết kế và sản xuất khép kín, tuân thủ nghiêm ngặt và an toàn với đội ngũ nhân viên có nhiều kinh nghiệm và tay nghề cao. Việc này giúp kiểm soát và quản quá trình xây dựng, lắp đặt diễn ra an toàn tuyệt đối.</p>
                        <li class="steelhome_text"> Tiết kiệm chi phí và thời gian</li>
                        <p class="steelhome_text">Công trình nhà thép tiền chế sử dụng kết cấu thép có ưu điểm nổi bật nhất là tiết kiệm chi phí thiết kế và chi phí nguyên vật liệu so với các loại công trình khác. Bên cạnh đó, việc lắp dựng cũng diễn ra nhanh chóng, giúp tiết kiệm được thời gian và chi phí nhân công.</p>

                        <li class="steelhome_text">Bao gồm các cấu kiện chính như: cột, dầm, giằng, xà gồ, vì kèo...</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>

   
@endsection