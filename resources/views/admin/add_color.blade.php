@extends('admin_layout.master')
@section('title','Thêm CSDL màu sản phẩm')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới màu sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">

                            <form enctype="multipart/form-data" role="form" method="post" action="{{route('post_add_color')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Tên màu sắc</label>

                                    <input type="text" name="color" class="form-control" placeholder="Màu sắc">
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
        var msg1 = '{{Session::get('success_add_color')}}';
        var exist1 = '{{Session::has('success_add_color')}}';
        if(exist1){
            swal({
                title: "Đã thêm",
                text: "",
                type: "success",
                timer: 2000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>

@endsection
