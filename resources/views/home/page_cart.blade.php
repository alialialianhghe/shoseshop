@extends('layout.layout')
@section('title','Giỏ hàng')
@section('content')

<style>
    .image-product{
            max-width: 100px;
            height: auto;
            width: 100%;
            border-radius: 5px;
        }
        .input-text{
            width: 55px;
            height: 35px;
            text-align: center;
            border-radius:5px;
            font-size: 16px;
        }
        .btn-delete {
            background-color: red;
            color: white;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
        }
        table {
            padding: 0;
            width: 100%;
            table-layout: auto;
        }
        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .10em;
        }
        table th, table td{
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 15px;
        }
        table th {
            font-size: 12px;
            text-transform: uppercase;
            color: black;
            font-weight: bold;
        }
        tr:hover {background-color:#f5f5f5;}
</style>

<div class="collection_text">Shopping Cart</div>
<table class="table table-bordered" style="max-width: 60%; margin: auto;">
        @if(Session::has('cart'))
            @if(Session('cart')->totalQty > 0)
                <thead>
                    <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Size</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th >Thành tiền</th>
                        <th scope="col" colspan="2">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($product_cart as $product)
                    <tr>
                        <th>{{ $product['item']['product_name']}}</th>
                        <td>
                            <a href="#">
                                <img class="image-product" src="{{asset('public/home/img/shoes-img5.png')}}" width="145" height="145" >
                            </a>
                        </td>
                        <td>
                            {{$product['size']}}
                        </td>

                        <td>{{ number_format($product['item']['product_price'])}} VNĐ</td>
                        <td>
                            <div class="quantity">
                                <input class="input-text qty text form-control quantity" type="number" id="txt_solg"
                                       value="{{$product['qty']}}"
                                       onchange="update_cart({{ $product['item']['id'] }} + ',' + this.value)">
                            </div>
                        </td>
                        <td>{{number_format($product['item']['product_price']*$product['qty'])}} VND</td>

                        <td colspan="2">
                            <a onclick="return   xacnhanxoa('Bạn chắc chắn xóa')"
                               href="{{ route('getDeleteCart',$product['item']['id']) }}"
                               class="btn btn-danger"
                               data-toggle="tooltip">
                                Delete
                            </a>
                        </td>
                    </tr>

                @endforeach
                <tr>
                    <td colspan="6"></td>
                    <td class="actions" colspan="2" style="padding:10px;">
                        <a href="{{ url('page-checkout') }}"  style="border:unset;width: 200px;">
                            <input type="submit" value="Checkout" name="update_cart" class="btn btn-primary" >
                        </a>
                    </td>
                </tr>
            @else
                <tr>
                    <td>
                        <p style="font-size: 25px;">Giỏ hàng không có sản phẩm</p>
                    </td>
                </tr>
            @endif
        @else
            <tr>
                <td>
                    <p style="font-size: 25px;">Giỏ hàng không có sản phẩm</p>
                </td>
            </tr>
        @endif
    </tbody>
  </table>
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
    function update_cart(e) {
        var ele = e.split(",");
        var ktra = document.getElementById('txt_solg').value;

        if(ktra > 0 && ktra < 100){
            $.ajax({
                method: "get",
                url: '{{ route('getUpdateCart') }}',
                data: {_token: '{{ csrf_token() }}',
                    id: ele[0],
                    quantity: ele[1]},

                success: function (result) {
                    swal({
                        title: "Đã cập nhật giỏ hàng",
                        text: "",
                        type: "success",
                        timer: 600,
                        showConfirmButton: false,
                        position: 'top-end',
                    });
                    window.setTimeout(function(){
                        window.location.reload();
                    } ,600);
                }
            });
        }else{
            swal({
                title: "Bớt bấm tào lao lại đi !",
                text: "",
                type: "warning",
                timer: 600,
                showConfirmButton: false,
                position: 'top-end',
            });
            document.getElementById('txt_solg').value = 1;
        }
    }

    var msg = '{{Session::get('delete_cart')}}';
    var exist = '{{Session::has('delete_cart')}}';
    if(exist){
        swal({
            title: "Đã xóa sản phẩm ra khỏi giỏ hàng.",
            text: "",
            type: "success",
            timer: 600,
            showConfirmButton: false,
            position: 'top-end',
        });
    }
    function xacnhanxoa(msg){
        if(window.confirm(msg)){
            return true;
        }
        return false;
    }

</script>
@endsection
