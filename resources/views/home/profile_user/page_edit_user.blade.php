@extends('home.profile_user.layout_profile')
@section('title', 'Cập nhật thông tin')
@section('content-profile-col-9')

    <div class="col-md-9">

        @if(session()->has('message'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cập nhật thành công!',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
        @endif

        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><button type="button" class="btn btn-primary">Thông Tin Cập Nhật</button>
                </ul>
            </div>
            <div class="card-body">
                <form action="{{ url('update-profile/'.$edit_user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <br/>
                        <label for="">Họ và tên:</label>
                        <input type="text" name="inputFullname" class="form-control" placeholder="Nhập họ và tên" value="{{ $edit_user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="">Tên tài khoản:</label>
                        <input type="text" name="inputUsername" class="form-control" placeholder="Nhập tên tài khoản" value="{{ $edit_user->username }}" disabled>
                    </div>


                    <div class="form-group">
                        <label for="">Giới tính: </label><br>
                        @if ($edit_user->sex == '0')
                            <label class="radio-inline"><input type="radio" name="inputSex" value="0" checked >Nam&nbsp;</label>
                            <label class="radio-inline"><input type="radio" name="inputSex" value="1">Nữ&nbsp;</label>
                            <label class="radio-inline"><input type="radio" name="inputSex" value="2">Khác</label>
                        @elseif($edit_user->sex == '1')
                            <label class="radio-inline"><input type="radio" name="inputSex" value="0">Nam&nbsp;</label>
                            <label class="radio-inline"><input type="radio" name="inputSex" value="1" checked>Nữ&nbsp;</label>
                            <label class="radio-inline"><input type="radio" name="inputSex" value="2">Khác</label>
                        @else  
                            <label class="radio-inline"><input type="radio" name="inputSex" value="0">Nam&nbsp;</label>
                            <label class="radio-inline"><input type="radio" name="inputSex" value="1">Nữ&nbsp;</label>
                            <label class="radio-inline"><input type="radio" name="inputSex" value="2"checked>Khác</label>  
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="birthday">Email:</label>
                        <input type="email" class="form-control" name="inputEmail" value="{{ $edit_user->email }}">
                    </div>


                    <div class="form-group ">
                        <label for="inputPhone"> Điện thoại </label>
                        <input type="number" class="form-control" name="inputPhone" placeholder="Nhập số điện thoại" value="0{{ $edit_user->phone }}">
                    </div>


                    <div class="form-group">
                        <label for="inputSex">Địa chỉ</label>   
                        <input type="text" class="form-control" name="inputAddress" placeholder="Nhập vào địa chỉ" value="{{ $edit_user->address }}">
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-danger">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
