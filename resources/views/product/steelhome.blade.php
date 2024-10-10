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
                <p class="p_bg_2"> Trang chủ   <img src="../img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Sản phẩm  <img src="../img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Nhà thép tiền chế</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="h2_first_product">NHÀ THÉP TIỀN CHẾ</h2>
        <img src="../images/steel_product.png" alt="steel_product">
        <div>
            <ol class="menu_ol">
                <li>Nhà thép tiền chế là gì?
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
                    Cấu tạo của nhà thép tiền chế
                    <p class="steelhome_text">
                        Có kết cấu gồm 3 thành phần chính:
                    </p>
                    <ul style="list-style: disc;">
                        <li class="steelhome_text">Kết cấu khung xương: tổ hợp cột, kèo thép, dầm…</li>
                        <li class="steelhome_text">Hệ kết cấu phụ: Xà gồ (xà gồ Z, C và U…), thanh chống đỉnh tường, sườn tường ,dầm tường và các cấu kiện khác.</li>
                        <li class="steelhome_text">Hệ bao che và phụ kiện như: tôn mái, tôn vách…</li>
                    </ul>
                    <p class="steelhome_text">
                        Ngoài ra, để phục vụ cho nhu cầu sử dụng của chủ đầu tư, khách hàng mà các thiết kế của nhà tiền chế có thể tích hợp thêm các kết cấu sau:
                    </p>
                    <ul style="list-style: disc;">
                        <li class="steelhome_text">Tiết kiệm: giúp tiết kiệm tối ưu chi phí nguyên vật liệu xây dựng, thuê nhân công.</li>
                        <li class="steelhome_text">Đây là loại công trình đa năng, phù hợp với nhiều mục đích sử dụng. Vì có thể được lắp đặt kết hợp với các kết cấu, phụ kiện khác như: dầm cầu trục, sàn lửng, lối đi vận hành, diềm mái, vách ngăn….</li>
                        <li class="steelhome_text">Thời gian thi công, lắp dựng nhanh vì các kết cấu thép đều được thiết kế và gia công sản xuất tại nhà máy. Sau đó được vận chuyển đến công trình và thực hiện giai đoạn lắp đặt. Đồng thời loại công trình này dễ mở rộng quy mô hay bổ sung các chức năng trong thiết kế đều dễ dàng và linh hoạt. Thực hiện dựa trên các yêu cầu đa dạng của chủ đầu tư, khách hàng.</li>
                        <li class="steelhome_text">Nhà thép tiền chế có khả năng chống ẩm mốc tối đa vì được thiết kế và sử dụng chất liệu cách nước tốt cùng hệ thống mái nối đứng, diềm mái giúp thoát nước tốt.</li>
                    </ul>
                    <img src="../images/steel_product_1.png" alt="steel_product_1">
                </li>
                <li>
                    Ứng dụng của nhà thép tiền chế
                    <p class="steelhome_text">
                        Nhà tiền chế ngày càng được lựa chọn vì tính đa năng và ứng dụng cao. Phù hợp với nhiều mục đích sử dụng trong các lĩnh vực: công nghiệp, nông nghiệp, thương mại, dân dụng. Với các dự án như: nhà xưởng, nhà kho, trung tâm thương mại, showroom, trung tâm hội nghị, bãi đậu xe, trường học. 
                    </p>
                </li>
                <li>
                    Nên lựa chọn giải pháp nhà thép tiền chế vì những yếu tố sau
                    <ul style="list-style: disc;">
                        <li class="steelhome_text">Sàn tầng lửng, dầm cầu trục (giúp nâng đỡ hệ thống cầu trục), hệ trợ lực mái, lối đi…..</li>
                        <li class="steelhome_text">Các phụ kiện chi tiết: mái che, mái mở rộng, diềm ốp, ống xối, máng xối, đỉnh mái, hệ thống thông gió, cáp giằng…</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>

   
@endsection