@extends('admin_layout.master')
@section('title','Edit-category')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chỉnh sửa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading " style="text-align: center; font-size: 10px;color: rosybrown">
                    *Sau khi ấn submit thì các dữ liệu củ sẽ bị thay thế
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form enctype="multipart/form-data" role="form" method="post" action="{{route('post_edit_product',$id)}}">
                                @csrf
                                @foreach($product as $products)
                                    <div class="form-group">
                                        <label>Loại sản phẩm</label>
                                        <label>
                                            <select name="category" class="form-control">
                                                @foreach($category as $cates)
                                                    @if($products->category_id == $cates->id)
                                                        <option value="{{$products->category_id }}" >{{$cates->category_name}}</option>
                                                    @endif
                                                @endforeach
                                                @foreach($category as $cate)
                                                    @if($products->category_id == $cate->id)
                                                        @continue
                                                    @else
                                                        <option value="{{$cate->id}}" >{{$cate->category_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input name="name_product" class="form-control" placeholder="{{$products->product_name}}">

                                    </div>

                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input name="price" class="form-control" placeholder="{{number_format($products->product_price)}} VNĐ">
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        {{--                                    <input name="image" type="file" multiple="multiple">--}}
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <style>
                                                            .dropdown {
                                                                position: relative;
                                                                display: inline-block;
                                                            }

                                                            .dropdown-content {
                                                                display: none;
                                                                position: absolute;
                                                                background-color: #f9f9f9;
                                                                min-width: 160px;
                                                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                                                z-index: 1;
                                                            }

                                                            .dropdown:hover .dropdown-content {
                                                                display: block;
                                                            }

                                                            .desc {
                                                                padding: 15px;
                                                                text-align: center;
                                                            }
                                                        </style>

                                                        @foreach((array)json_decode($products->product_image, true) as $image)

                                                            <div class="dropdown">

                                                                <img width="70" height="50" alt="Cinque Terre" src="{{asset('public/home/img/'.$image)}}">
                                                                <div class="dropdown-content">

                                                                    <img style="border-style: solid;border-color: #00a199" width="200" height="120" alt="Cinque Terre" src="{{asset('public/home/img/'.$image)}}" >

                                                                    <a href="{{route('delete_image',$id)}}" type="button"><i class="far fa-trash-alt" style="font-size: 20px;position: absolute;left: 0px"></i></a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                        </table>
                                        <label>Thêm ảnh</label>
                                        <input type="file" class="form-control" name="image[]" placeholder="images" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea name="discription" class="form-control" rows="3" placeholder="{{$products->product_discribe}}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm Giá</label>
                                        <input name="discost" class="form-control" placeholder="{{$products->product_discount}} VNĐ">
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-default"><i class="fas fa-check"></i> Cập nhật</button>

                                <a href="{{route('show_product')}}" type="button" class="btn btn-default"><i class="fas fa-sign-out-alt"></i> Exit</a>
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
