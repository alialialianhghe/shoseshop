@extends('admin_layout.master')
@section('title','Tình trạng đơn hàng')
@section('admin_show_product')

@endsection

<style>
    table thead th{
        text-align: center;
    }
    table tbody td{
        text-align: center;
    }
</style>

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tổng hợp đơn hàng</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bạn có thể thay đổi trạng thái đơn hàng
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Khách hàng</th>
                                <th>SĐT</th>
                                <th>Địa chỉ giao hàng</th>
                                <th>Trạng thái đơn hàng</th>
                                <th>Tổng tiền</th>
                                <th scope="row" colspan="2">Tùy Chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $key => $orders)
                                    <tr class="odd gradeX">
                                        <td>{{ ++$key }}</td>
                                        <td>
                                            @foreach($user as $users)
                                                @if($users->id == $orders->user_id)
                                                    {{ucwords($users->name)}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($user as $users)
                                                @if($users->id == $orders->user_id)
                                                    {{ucwords($users->phone)}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($user as $users)
                                                @if($users->id == $orders->user_id)
                                                    {{ucwords($users->address)}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($orders->order_status == 0)
                                                <b style="color: green;">Chờ Xác Nhận</b>
                                            @elseif ($orders->order_status == 1)
                                                <b style="color: orange;">Đang giao hàng</b>
                                            @elseif ($orders->order_status == 2)
                                                <b style="color: orange;">Đã giao hàng</b>
                                            @else
                                                <b style="color: red;">Đã Hủy</b>    
                                            @endif
                                        </td>
                                        <td>
                                            {{number_format($orders->total_price)}} VND
                                        </td>
                                        @if($orders->order_status == 0)
                                            <td>
                                                <a class="btn btn-success" href="{{url('update-order-status/'.$orders->id)}}"> 
                                                    <i class="fas fa-check"></i> Duyệt
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" onclick="nonlogin('Bạn có chắc muốn hủy đơn hàng!')" href="{{ url('cancel-order/'.$orders->id) }}" role="button"> 
                                                    <i class="fas fa-trash"></i> Hủy
                                                </a>
                                            </td>
                                        @elseif($orders->order_status == 1)
                                            <td>
                                                <a class="btn btn-success"  href="{{url('update-order-status/'.$orders->id)}}"> 
                                                    <i class="fas fa-check"></i> Xác Nhận
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" onclick="nonlogin('Bạn có chắc muốn hủy đơn hàng!')" href="{{ url('cancel-order/'.$orders->id) }}" role="button"> 
                                                    <i class="fas fa-trash"></i> Hủy
                                                </a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="btn btn-danger" href="#" disabled> <i class="fas fa-close"></i> Xác Nhận</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" disabled> <i class="fas fa-trash"></i> Hủy </button>
                                            </td> 
                                        @endif
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <script>
        function nonlogin(msg){
            if(window.confirm(msg)){
                return true;
            }k
            return false;
        }
    </script>
    <script>
        var msg = '{{Session::get('message')}}';
        var exist = '{{Session::has('message')}}';
        if(exist){
            swal({
                icon: 'success',
                title: "Đã cập nhật",
                text: "",
                type: "success",
                timer: 1000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
