<style>
    ul li a{
        color: white;
    }
</style>
<div class="section_footer">
    <div class="container">
        <div class="mail_section">
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div><a href="#"><img src="{{asset('public/home/img/footer-logo.png')}}"></a></div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-logo"><img src="{{asset('public/home/img/phone-icon.png')}}"><span class="map_text">(+84) 123456789</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-logo"><img src="{{asset('public/home/img/email-icon.png')}}"><span class="map_text">shoesshop@gmail.com</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="{{asset('public/home/img/fb-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('public/home/img/twitter-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('public/home/img/in-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('public/home/img/google-icon.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-4 col-lg-2">
                    <p class="dummy_text"> 👞 👞 Chừng Nào Đôi Chân Tôi Còn Bước Trên Mặt Đất – Tôi Sẽ Chỉ Đi Các Đôi Giày Chất Nhất !!!
                    </p>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <h2 class="shop_text">Địa Chỉ </h2>
                    <div class="image-icon">
                        <img src="{{asset('public/home/img/map-icon.png')}}">
                        <span class="pet_text">Thị xã Hòa An, Huyện Phụng Hiệp, Tỉnh Hậu Giang.</span>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3">
                    <h2 class="shop_text">Điều Hướng</h2>
                    <div class="delivery_text">
                        <ul>
                            <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                            <li><a href="{{ route('page_product') }}">Cửa Hàng </a></li>
                            <li><a href="{{ url('page-news') }}">Tin Tức</a></li>
                            <li><a href="{{ url('page-contact') }}">Liên Lạc</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h2 class="adderess_text">Sản Phẩm</h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Prices drop</li>
                            <li>New products</li>
                            <li>Best sales</li>
                            <li>Contact us</li>
                            <li>Sitemap</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h2 class="adderess_text">Phản Hồi</h2>
                    <div class="form-group" style="width: 300px;">
                        <input type="text" class="enter_email" placeholder="Vui lòng nhập email..." name="Name">
                        <div style="margin: 5px 0px;"></div>
                        <button class="subscribr_bt float-right" style="width: 80px;"><i class="fa fa-envelope"></i> Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a> --}}
</div>
