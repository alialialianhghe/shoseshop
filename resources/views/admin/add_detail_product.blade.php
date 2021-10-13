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

                            <form enctype="multipart/form-data" role="form" method="post" action="{{route('post_add_detail_product')}}">
                                @csrf
                                <div class="form-group">
                                    @foreach($product as $products)
                                        <label>Tên sản phẩm: {{$products->product_name}}</label>
                                        <input type="text" name="id_product" value="{{$idP}}" hidden>
                                    @endforeach
                                        <br>
                                </div>
                                <div class="form-group">
                                    <label>size giày</label>
                                    <select name="size_giay" class="form-control">
                                        <option value="0">chọn size...</option>
                                        @for ($i = 38; $i < 43; $i++)
                                            <option value="{{$i}}">size {{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Màu giày</label>
                                    <select name="color_product" class="form-control">
                                        <option value="0">chọn màu...</option>
                                        @foreach($color as $colors)
                                            <option value="{{$colors->id}}">{{$colors->name_color}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input name="qty_product" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fas fa-check"></i> Thêm mới</button>

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
        var msg1 = '{{Session::get('success_add_product')}}';
        var exist1 = '{{Session::has('success_add_product')}}';
        if(exist1){
            swal({
                title: "Đã thêm sản phẩm",
                text: "",
                icon: "success",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>

    {{-- @if(session()->has('message'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Đã thêm thành công!',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
    @endif --}}
@endsection
