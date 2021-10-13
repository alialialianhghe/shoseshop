@extends('admin_layout.master')
@section('title','Add-category')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới loại sản phẩm</h1>
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
                            <form role="form" action="{{route('post_category')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Tên loại sản phẩm</label>
                                    <input class="form-control" type="text" name="type_category">
                                    <a href="#"><p class="help-block">Bạn gặp Vấn đề khi thêm mới loại sản phẩm?</p></a>
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
        var msg1 = '{{Session::get('success_category')}}';
        var exist1 = '{{Session::has('success_category')}}';
        if(exist1){
            swal({
                title: "Đã thêm thành công.",
                text: "",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
    <script>
        var msg1 = '{{Session::get('null_message')}}';
        var exist1 = '{{Session::has('null_message')}}';
        if(exist1){
            swal({
                title: "Hãy nhập Tên loại sản phẩm bạn muốn thêm",
                text: "",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
