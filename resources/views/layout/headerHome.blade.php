<style>
    .product-count {
    background: none repeat scroll 0 0 #DB5660;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    font-size: 10px;
    height: 20px;
    padding-top: 1px;
    position: absolute;
    text-align: center;
    width: 20px;
}
</style>
<div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo"><a href="{{route('home')}}"><img src="{{asset('public/home/img/logo.png')}}"></a></div>
            </div>
            <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="{{ url('/') }}">TRANG CHỦ</a>
                            <a class="nav-item nav-link" href="{{route('page_product',0)}}">CỬA HÀNG</a>
                            <a class="nav-item nav-link" href="{{ url('page-news') }}">TIN TỨC</a>
                            <a class="nav-item nav-link" href="{{ url('page-contact') }}">LIÊN HỆ</a>

                            @if(Auth::check())
                                @if(Session::has('cart'))
                                    <a class="nav-item nav-link " href="{{ url('page-cart') }}">
                                        <i class="fa fa-shopping-cart" aria-hidden="true" title="Giỏ hàng"></i>
                                        <span class="product-count">{{ count($product_cart) }}</span>
                                    </a>
                                @else
                                    <a class="nav-item nav-link " href="{{ url('page-cart') }}">
                                        <i class="fa fa-shopping-cart" aria-hidden="true" title="Giỏ hàng"></i>
                                        <span class="product-count">0</span>
                                    </a>
                                @endif
                            @else
                                <a onclick="return  nonlogin('Bạn cần đăng nhập trước !!')" href="{{ route('page_login') }}" class="nav-item nav-link ">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" title="Giỏ hàng"></i>
                                    <span class="product-count">0</span>
                                </a>
                            @endif

                            @if (Auth::check())
                                <ul style="margin: 10px 0 0 10px">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff; font-size: 18px;">
                                           <i class="fas fa-user fa-lg"></i>
                                            {{ Auth::user()->username }}
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li>
                                                <a href="{{ url('page-infor-user/'.Auth::id()) }}" style="color: #333;"><i class="fa fa-user fa-fw"></i> Thông Tin</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('change-pass/'.Auth::id()) }}" style="color: #333;"><i class="fa fa-gear fa-fw"></i> Đổi Mật Khẩu</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="{{route('logout')}}" style="color: #333;"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            @else
                                <ul style="margin-left: 20px;">
                                    <li style="font-size: 18px;">
                                        <i class="fa fa-sign-in" style="color: white;"></i>
                                        <a style="color:white;" href="{{ url('page-login') }}"> Đăng Nhập</a>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i class="fa fa-check"  style="color: white;"></i>
                                        <a style="color:white;" href="{{ url('page-signup') }}"> Đăng Ký</a>
                                    </li>
                                </ul>
                                @endif
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>

    <script>
        function nonlogin(msg){
            if(window.confirm(msg)){
                return true;
            }
            return false;
        }
    </script>


