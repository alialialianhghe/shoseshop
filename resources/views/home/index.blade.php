@extends('layout.layout')
@section('title','Trang chủ')
@section('content')
    <div class="header_section">
        <div class="">
            <div class="container-fluid">
                <section class="slide-wrapper">
                    <div class="container-fluid">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <div class="page_no">0/2</div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text"> 
                                                    Không thể cân đo, đong đếm được với mỗi người bao nhiêu đôi giày là đủ, 
                                                    nhưng sẽ có những kiểu giày mà Shoes Shop Việt Nam tin rằng mỗi người 
                                                    nên có trong bộ sưu tập giày của mình. 
                                                </p>
                                                <button class="buy_bt">Mua Ngay</button>
                                                <button class="more_bt">
                                                    <a type="button" href="{{route('page_product')}}" >
                                                        Chi Tiết
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
<div class="layout_padding collection_section">
    <div class="container">
        {{-- <h1 class="new_text"><strong>Shoes Shop</strong></h1>
        <p class="consectetur_text">
            Shoes Shop thương hiệu giày dép được rất nhiều người biết đến với chất lượng sản phẩm tuyệt vời,
             giá cả phù hợp với mọi người. Sản phẩm đa dạng : giày nam, giày nữ, sneaker...
        </p> --}}
        <h1 class="new_text"><strong>Sneaker</strong></h1>
        <p class="consectetur_text">
            Sự năng động và thoải mái mà sneaker mang lại là không thể chối cãi. 
            Cho dù làm việc hay tham gia các hoạt động thể thao đòi hỏi sự vận động nhiều thì 
            một đôi giày thể thao là phải có. Với những người thường xuyên vận động sở hữu 
            cho mình một đôi giày sneaker sẽ giúp bạn thoải mái di chuyển 
            trên đôi chân của bạn trong thời gian dài và có thể tránh được rất nhiều chấn thương cho đôi chân.
        </p>
        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <button class="new_bt">New</button>
                        <div class="shoes-img"><img src="{{ asset('public/home/img/shoes-img1.png') }}"></div>
                        <p class="sport_text">Sports</p>
                        <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                    <button class="seemore_bt">
                            <a type="button" href="{{route('page_product')}}" >
                                See More
                            </a>
                    </button>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img src="{{ asset('public/home/img/shoes-img2.png') }}"></div>
                        <p class="sport_text">Sneaker</p>
                        <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ asset('public/home/img/star-icon.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="collection_section">
    <div class="container">
        <h1 class="new_text"><strong>Thời trang bất tận cùng Shoes Shop</strong></h1>
        <p class="consectetur_text">
            Ngành công nghiệp thời trang giày dép muôn hình vạn trạng sẽ không bao giờ ngừng thay đổi để đem lại 
            vẻ đẹp hình thức ngày càng được trau chuốt. “Người nào giày đó” gần như là nguyên tắc bất di bất dịch của mọi người khi phối đồ.
            Đến với Shoes Shop bạn sẽ được cập nhật các xu hướng giày dép trên thị trường với giá mềm hơn, 
            đồng thời sử dụng các mã giảm giá tại iprice để hỗ trợ mua sắm trực tuyến cực thuận lợi. Khám phá ngay thôi!
        </p>
    </div>
</div>
<div class="collectipn_section_3 layuot_padding">
    <div class="container">
        <div class="racing_shoes">
            <div class="row">
                <div class="col-md-8">
                    <div class="shoes-img3"><img src="{{asset('public/home/img/shoes-img3.png')}}"></div>
                </div>
                <div class="col-md-4">
                    <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
                    <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                    <a class="btn btn-danger btn-lg" href="{{route('page_product',0)}}" role="button" style="margin-top: 10px;"> See More</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- new collection section end -->
    <script>
        var msg = '{{Session::get('order_success')}}';
        var exist = '{{Session::has('order_success')}}';
        if (exist) {
            swal({
                title: "Đặt hàng thành công",
                text: "",
                type: "success",
                timer: 1000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
    <script>
        var msg = '{{Session::get('add_cart_success')}}';
        var exist = '{{Session::has('add_cart_success')}}';
        if (exist) {
            swal({
                title: "Đã thêm vào giỏ hàng",
                text: "",
                type: "success",
                timer: 1200,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
    <script>
        var msg = '{{Session::get('error_login')}}';
        var exist = '{{Session::has('error_login')}}';
        if (exist) {
            swal({
                title: "Hãy đăng nhập !",
                text: "",
                type: "success",
                timer: 1200,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
