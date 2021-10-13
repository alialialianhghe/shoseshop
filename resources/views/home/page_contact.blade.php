@extends('layout.layout')
@section('title','Cừa Hàng')
@section('content')

<div class="collection_text">LIÊN HỆ</div>
<div class="layout_padding contact_section">
    {{-- <div class="container"> --}}
        {{-- <h1 class="new_text">
            <strong></strong>
        </h1> --}}
        <marquee>
            <h1>
                <strong>🧡💛💚💙💜Vui lòng để lại thông tin, chúng tôi sẽ phản hồi trong thời gian sớm nhất!🧡💛💚💙💜</strong>
            </h1>
        </marquee>
    {{-- </div> --}}
    <div class="container-fluid ram"><br>
        <div class="row">
            <div class="col-md-6">
                <div class="email_box">
                <div class="input_main">
                   <div class="container">
                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Họ Tên" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Số Điện Thoại" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>

                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Nội dung" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                      </form>
                   </div>
                   <div class="send_btn">
                    <button class="main_bt">Send</button>
                   </div>
                </div>
        </div>
            </div>
            <div class="col-md-6">
                <div class="shop_banner">
                    <div class="our_shop">
                        <button class="out_shop_bt">Our Shop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection