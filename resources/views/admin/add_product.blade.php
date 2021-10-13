@extends('admin_layout.master')
@section('title','Add-product')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading " style="text-align: center; font-size: 10px;color: rosybrown">
                    *Cần thêm loại sản phẩm trước khi thêm sản phẩm mới vào danh mục bán hàng
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form enctype="multipart/form-data" role="form" method="post" action="{{route('post_product')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Loại sản phẩm</label>
                                    <select name="category" class="form-control">
                                        @foreach($category as $cate)
                                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input name="name_product" class="form-control">

                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label>Số lượng</label>--}}
{{--                                    <input name="quality" class="form-control">--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input name="price" class="form-control" placeholder="VNĐ">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
{{--                                    <input name="image" type="file" multiple="multiple">--}}
                                    <input required type="file" class="form-control" name="image[]" placeholder="images" multiple>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="discription" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Giảm Giá</label>
                                    <input name="discost" class="form-control" placeholder="VNĐ">
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
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>

@endsection
