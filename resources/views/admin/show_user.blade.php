@extends('admin_layout.master')
@section('title','Thành viên')
@section('content')

@if(Auth::check())
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thành viên</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        @foreach($users as $user)
            <div class="col-sm-3">
                <div class="hero-widget well well-sm">
                    <div class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="text">
                        <label class="text-muted">{{ucwords($user->name)}}</label><br>
                        @foreach($role as $roles)
                            @if($roles->id == $user -> role_id)
                                <label class="text-muted">{{$roles->role_name}}</label>
                            @endif
                        @endforeach
                        <br>
                        <label class="text-muted">{{$user->phone}}</label>
                        <label class="text-muted">{{$user->address}}</label>
                    </div>
                    <div class="options">
                        <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@else
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bạn chưa được cấp quyền </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endif
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        var msg1 = '{{Session::get('success_add_product')}}';
        var exist1 = '{{Session::has('success_add_product')}}';
        if (exist1) {
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

@endsection
