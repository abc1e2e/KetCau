@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/private.css') }}">
@endsection

@section('title', 'Private Page')

@section('content')
    <div class="private_bg_1">
        <div class="container ">
            <div class="about_header">
                <p class="p_bg_1">Thông tin pháp lý</p>
                <hr>
                <p class="p_bg_2"> Trang chủ <img src="img_about/arrow-drop-right-fill.png" alt="arrow-drop-right-fill"> Thông tin pháp lý </p>
            </div>
        </div>
    </div>
    <div class="container_private">
        <p class="p_introduce">Cảm ơn bạn đã truy cập vào trang website Thăng Long Steel .vn được vận hành bởi Công ty TNHH BioLG. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của bạn. Xin vui lòng đọc bản Chính sách bảo vệ thông tin cá nhân của người tiêu dùng dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện nhằm tôn trọng và bảo vệ quyền lợi của người truy cập. </p>
        <p class="p_introduce">Bảo vệ thông tin cá nhân của người tiêu dùng và gây dựng được niềm tin cho bạn là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến bạn tuân thủ theo nội dung của chính sách này. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.  </p>

        <ol class="menu_ol">
            <li>
                <h2 class="private_cs">Mục đích thu thập thông tin cá nhân người tiêu dùng</h2>
                <p class="p_introduce">
                    Cung cấp dịch vụ cho Khách hàng và quản lý, sử dụng thông tin cá nhân của Người Tiêu Dùng nhằm mục đích quản lý cơ sở dữ liệu về Người Tiêu Dùng và kịp thời xử lý các tình huống phát sinh (nếu có). 
                </p>
            </li>
            <li>
                <h2 class="private_cs">Phạm vi sử dụng thông tin cá nhân</h2>
                <p class="p_introduce">
                    Website Thăng Long Steel .vn sử dụng thông tin của Người Tiêu Dùng cung cấp để: <br>
                    Cung cấp các dịch vụ đến Người Tiêu Dùng; </br>
                    Gửi các thông báo về các hoạt động trao đổi thông tin giữa Người Tiêu Dùng và BioLG; </br>
                    Ngăn ngừa các hoạt động phá hủy, chiếm đoạt tài khoản người dùng của Người Tiêu Dùng hoặc các hoạt động giả mạo</br> 
                    Người Tiêu Dùng; </br>
                    Liên lạc và giải quyết khiếu nại với Người Tiêu Dùng; </br>
                    Xác nhận và trao đổi thông tin về giao dịch của Người Tiêu Dùng tại LiveSpo Global;</br>
                    Trong trường hợp có yêu cầu của cơ quan quản lý nhà nước có thẩm quyền.</br>
                </p>
                
            </li>
            <li>
                <h2 class="private_cs">Thời gian lưu trữ thông tin cá nhân</h2>
                <p class="p_introduce">
                    Không có thời hạn ngoại trừ trường hợp Người Tiêu Dùng gửi có yêu cầu hủy bỏ tới cho Ban quản trị hoặc Công ty giải thể hoặc bị phá sản. 
                </p>
            </li>
            <li>
                <h2 class="private_cs">Cam kết bảo mật thông tin cá nhân của người tiêu dùng</h2>
                <p class="p_introduce">
                    Thông tin cá nhân của Người Tiêu Dùng trên Website Thăng Long Steel .vn được Ban quản trị cam kết bảo mật tuyệt đối theo chính sách bảo mật thông tin cá nhân được đăng tải trên Website BioLG.vn. Việc thu thập và sử dụng thông tin của mỗi Người Tiêu Dùng chỉ được thực hiện khi có sự đồng ý của Người Tiêu Dùng trừ những trường hợp pháp luật có quy định khác và quy định này. Không sử dụng, không chuyển giao, cung cấp hoặc tiết lộ cho bên thứ 3 về thông tin cá nhân của Người Tiêu Dùng khi không có sự đồng ý của Người Tiêu Dùng ngoại trừ các trường hợp được quy định tại quy định này hoặc quy định của pháp luật. Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân của Người Tiêu Dùng, Ban quản trị có trách nhiệm thông báo và làm việc với cơ quan chức năng điều tra và xử lý kịp thời, đồng thời thông báo cho Người Tiêu Dùng được biết về vụ việc. Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Người Tiêu Dùng bao gồm thông tin hóa đơn kế toán chứng từ số hóa tại khu vực dữ liệu trung tâm an toàn cấp 1 của BioLG. 
                </p>
            </li>
        </ol>
    </div>

@endsection