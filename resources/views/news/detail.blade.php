@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new.css') }}">
@endsection

@section('title', 'Product Detail Page')

@section('content')
    <div class="container">
        <p class="p_new_1">Trang chủ <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Tin Tức
            <img src="../images/arrow-right-double-sharp.png" alt="arrow-right-double-sharp"> Chi tiết tin tức</p>
    </div>
    <div class="container">
        <div class="flex-detail about_div_2">
            <h2 class="h2_first">{{ $post->title }}</h2>
            <p class="p_first">{{ $post->content }}</p>

            <img class="img_1" src="{{ Storage::url($post->image_main) }}" alt="img_main">

            @foreach ($postImg as $key => $value)
                <ol class="menu_ol">
                     <li  class="h2_content"> {{ $value->title }}</li>
              
                    </ol>
                    <div>
                        <p class="content-detail">{{ $value->content }}</p>
                        <img class="img_1" src="{{ Storage::url($value->image) }}" alt="img_main">                 
                    </div>
            @endforeach



        </div>
    @endsection

    @section('script')
        <script>
            $(document).ready(function() {
                $('#form_comment').submit(function(e) {
                    var id =
                        e.preventDefault(); // Ngăn form submit theo cách thông thường

                    let formData = {
                        'post_id': $('#post_id').val(),
                        'content': $('#content').val(),
                        'name': $('#name').val(),
                        'email': $('#email').val(),
                        'phone': $('#phone').val(),
                        '_token': $('input[name=_token]').val()
                    };
                    console.log(formData)
                    $.ajax({
                        url: "{{ route('news.comment') }}",
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            console.log(response.data);
                            alert('Bình luận đã được gửi thành công!');
                            // Xóa nội dung form sau khi gửi thành công
                            $('#form_comment')[0].reset();
                            // Cập nhật danh sách bình luận (nếu cần)
                            updateCommentList(response.data);
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                            alert('Có lỗi xảy ra khi gửi bình luận');
                        }
                    });
                });

                function updateCommentList(newComment) {
                    let commentHtml = '     <div class="comment">' +
                        '<div class="text_comment">' +
                        '<div class="text_comment_1">' +
                        '<div class="text_comment_2">' +
                        newComment.name + '</div>' +
                        '<div class="text_comment_3">' +
                        newComment.created_at + '</div>' +
                        '</div>' +
                        '<div class="text_comment_4">' + newComment.content + ' </div>' +
                        '</div>' +
                        '</div>';
                    $('#commentList').append(commentHtml);
                }
            });
        </script>
    @endsection
