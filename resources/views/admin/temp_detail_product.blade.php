@extends('admin_layout.master')
@section('title','Thêm chi tiết sản phẩm')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới chi tiết sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading " style="text-align: center; font-size: 10px;color: rosybrown">
                    *Cần thêm sản phẩm trước khi thêm mới chi tiết sản phẩm vào danh mục bán hàng
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form enctype="multipart/form-data" role="form" method="get" action="{{route('add_detail_product')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Chọn Sản Phẩm</label>
                                    <select name="id_product" class="form-control">
                                        <option value="0"> - - - - - Chọn - - - - -</option>
                                        @foreach($product as $products)
                                            <option value="{{$products->id}}">{{$products->product_name}}</option>
                                            @foreach((array)json_decode($products->product_image, true) as $image)
                                                <img src="{{asset('public/home/img/'.$image)}}" width="50" height="50">
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fas fa-check"></i>Tiến hành Thêm mới</button>
                                <a href="{{route('page-admin')}}" type="button" class="btn btn-default"><i class="fas fa-sign-out-alt"></i> Trở về trang chủ</a>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-3"></div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <script>
        var msg1 = '{{Session::get('success_add_detail_product')}}';
        var exist1 = '{{Session::has('success_add_detail_product')}}';
        if(exist1){
            swal({
                title: "Đã thêm thành công",
                text: "",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>

@endsection
