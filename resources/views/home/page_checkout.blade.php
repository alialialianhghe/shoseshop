@extends('layout.layout')
@section('title','Thanh Toán')
@section('content')

<style>
    table.shop_table {
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    margin-bottom: 50px;
    width: 100%;
    }
    table.shop_table th, table.shop_table td {
        border-left: 1px solid #ddd;
        border-top: 1px solid #ddd;
        padding: 15px;
        text-align: center;
    }
    table.shop_table th {
        background: none repeat scroll 0 0 #f4f4f4;
        font-size: 15px;
        text-transform: uppercase;
    }
</style>

<div class="collection_text">Checkout</div>
<div class="single-product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="customer_details" class="col2-set">
                    <div class="">
                        <div class="woocommerce-billing-fields"><br><br>
                            @if(Auth::check())
                                <h3><b>INFORMATION</b> </h3>
                                <label class="" for="billing_country">
                                    <b style="font-size: 12px">
                                        <p style="font-size: 16px">FullName: {{ucwords(Auth::user()->username)}}</p>
                                        <p>Contact: {{Auth::user()->phone}}</p>
                                        <p>Email: {{Auth::user()->email}}</p>
                                        <p>Address: {{ucwords(Auth::user()->address)}}</p>
                                        <a href="{{ url('page-infor-user') }}" class="btn btn-default" style="background-color: #DB5660;color: white;" >
                                            Change Information
                                        </a>
                                    </b>
                                </label>
                            @else

                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form action="{{route('check_out')}}" class="checkout" method="post">
                            @csrf
                            <h3 id="order_review_heading"><br><br><b>RECEIPT</b> </h3>
                            <div id="order_review" style="position: relative;">
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th class="product-image">Hình ảnh</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-name">Size</th>
                                            <th class="product-name">Màu sắc</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quality">Số lượng</th>
                                            <th class="product-total">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=0)
                                        @if(Session::has('cart'))
                                            @if(Session('cart')->totalQty > 0)
                                                @foreach($product_cart as $product)
                                                    <tr class="cart_item">
                                                        <td>{{++$i}}</td>
                                                        <td class="product-image">
                                                            @foreach((array)json_decode($product['item']->product_image, true) as $image)
                                                                <a href="{{route('product_detail',$product['item']['id'])}}">
                                                                    <img class="shop_thumbnail" src="{{asset('public/home/img/'.$image)}}" width="145" height="145">
                                                                </a>
                                                                @break
                                                            @endforeach
                                                        </td>

                                                        <td data-label="Tên sản phẩm">
                                                            <a href="#" style="color:#1abc9c ">
                                                                {{ $product['item']['product_name']}}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {{$product['size']}}
                                                        </td>
                                                        <td>
                                                            @php($color = DB::table('colors')->get())
                                                            @foreach($color as $colors)
                                                                @if($colors->id == $product['color'])
                                                                    {{$colors->name_color}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td data-label="Giá sản phẩm" >
                                                            <span class="amount" >{{ number_format($product['item']['product_price'])}} VND</span>
                                                        </td>
                                                        <td data-label="Số lượng">
                                                            {{$product['qty']}}
                                                        </td>
                                                        <td data-label="Tổng đơn hàng">

                                                            <span class="amount">{{number_format($product['item']['product_price']*$product['qty'])}} VND</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="qua-col "></td>
                                                    <td class="text-right"></td>
                                                </tr>
                                            @endif
                                        @else
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="qua-col "></td>
                                                <td class="text-right"></td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3><b>Phương thức thanh toán</b> </h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div  class="dropdown show">
                                            <a style="background-color: #db5660;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              chose...
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Cash</a>
                                              <a class="dropdown-item" href="#">Online Checkout</a>
                                          </div>
                                        </div>
                                    </div>
                                <br><br>
                                <table class="shop_table" style="width:100%;" >
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <td>
                                                <strong>Tổng phụ giỏ hàng</strong>
                                            </td>
                                            <td>
                                                <span>
                                                    0 VND
                                                </span>
                                            </td>
                                        </tr>

                                        <tr class="shipping">
                                            <td>
                                                <strong>Vận chuyển và xử lí</strong>
                                            </td>
                                            <td>
                                                    <input type="hidden" value="500000" name="inputDelivery">
                                            </td>
                                        </tr>

                                        <tr class="order-total">
                                            <td>
                                                <strong>Tổng đơn hàng</strong>
                                            </td>

                                            <td data-label="Tổng đơn hàng">
                                                @if(Session::has('cart'))
                                                    @if(Session('cart')->totalQty > 0)
                                                        @foreach($product_cart as $product)
                                                                    <strong><span class="amount">{{number_format($totalPrice)}} VND</span></strong>
                                                            @break
                                                        @endforeach
                                                    @else
                                                        <strong><span class="amount">0 VND</span></strong>
                                                    @endif
                                                @else
                                                    <strong><span class="amount">0 VND</span></strong>
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td class="actions">
                                                    <input type="submit" value="Đặt hàng" class="btn btn-default" name="update_cart" style="background-color: #DB5660;color: white;">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
