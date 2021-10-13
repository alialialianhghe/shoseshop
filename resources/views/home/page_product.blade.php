@extends('layout.layout')
@section('title','Cừa Hàng')
@section('content')

<link rel="stylesheet" href="{{ url('public/home/css/product.css') }}">
<!-- New Arrivals section start -->
<div class="collection_text">
        Tất cả sản phẩm
</div>

<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>🔱 Thiết Kế Tinh Tế & Hoàn Hảo Đến Từng Chi Tiết</strong></h1>
        <p class="consectetur_text">
            👟👟 Chừng Nào Đôi Chân Tôi Còn Bước Trên Mặt Đất – Tôi Sẽ Chỉ Đi Các Đôi Giày Chất Nhất !!!
            👞 👞 Bạn Đã Sắm Được Cho Mình Một Đôi Giày Đã Thực Sự Vừa Lòng Chưa ???
            </p>
    </div>
</div>
        {{-- @foreach($get_products as $products) --}}
                <div class="container" style="width: 100%">
                    {{-- <div class="buy_now_bt">
                        <button class="buy_text">
                            @foreach($cate as $cates)
                                @if($cates->id == $products->category_id )
                                    {{ucwords($cates->category_name)}}
                                @endif
                            @endforeach
                        </button>
                    </div> --}}
        {{-- @endforeach
    @endif             --}}
                    <div class="row">
                            @foreach ($get_products as $product)
                                <div class="card">
                                    <div class="imgBx">
                                        @foreach((array)json_decode($product->product_image, true) as $image)
                                            <a href="{{route('product_detail',$product->id)}}">
                                                <img src="{{asset('public/uploads/'.$image)}}" alt="">
                                            </a>
                                        @break
                                        @endforeach
                                        <h2>{{ $product->product_name }}</h2>
                                    </div>
                                    <div class="content">
                                        <div class="size">
                                            <h3>Size: </h3>
                                            @php($show_details = DB::table('detail_products')->where('product_id',$product->id)->get())
                                            @foreach($show_details as $show_detail)
                                                <span style="background-color:#DB5660; color: #fff;">{{ $show_detail->size }}</span>
                                            @endforeach
                                        </div>
                                        {{-- <div class="color">
                                            <h3>Color: </h3>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                        </div> --}}
                                        <a href="{{ url('product-detail/'.$product->id) }}">Buy Now</a>
                                    </div>
                                </div>

                            @endforeach
                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <ul class="pagination justify-content-center pagination-sm mt-2 ">
                                            {{ $get_products->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                </div>
            </div>

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

   <!-- New Arrivals section end -->
@endsection
