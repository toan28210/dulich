@extends('admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thông tin khách hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                   <th>Giới tính</th>
                   <th>Ngày sinh</th>
                   <th>Quốc tịch</th>
                   <th>Địa chỉ</th>
                   <th>Số điện thoại</th>
                   <td>Email</td>
                    <th>Chỉnh sửa</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($customer as $key => $value)
                        <td>{{$key+1}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{ $value->gioitinh }}</td>
                        <td>{{ $value->ngaysinh }}</td>
                        <td>{{ $value->quoctich }}</td>
                        <td>{{ $value->diachi }}</td>
                        <td>{{ $value->sdt }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <button class="btn btn-primary edit" title="{{ 'Sửa'.$value->name }} " data-toggle="modal" data-target="#edit" type="button" data-id="{{$value->id}}"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger delete" title="{{ 'Xóa'.$value->name }}" data-toggle="modal" data-target="#delete" type="button" data-id="{{$value->id}}"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pull-right"></div>
            <div><a class="btn btn-warning" href="#">Thêm</a></div>
            </div>
        </div>
        </div>
        <div class="modal" id="edit">
        <div class="modal-dialog">
                <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                                Chỉnh sửa  <span class="title"> </span>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="row" style="margin:5px">
                            <div class="col-lg-12">

                                <form role="form">
                                        <fieldset class="form-group">
                                                <label>Name</label>
                                                <input class="form-control name" name="name">
                                        </fieldset>
                                    <span class="error" style="color:red; font-size:15px;"></span>

                                       

                                </form>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success update">Sửa</button>
                            <button type="reset" class="btn btn-primary" data-dismiss="modal" type="button">Hủy</button>
                        </div>

                </div>
        </div>
</div>
<div class="modal" id="delete">
        <div class="modal-dialog">
                <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                                <h5 class="modal-title">Xóa sản phẩm</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="row" style="margin:5px">
                            <div class="col-lg-12">

                                <form role="form">
                                    <h3>Bạn có muốn xóa sản phẩm này</h3>
                                </form>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success del">Xóa</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                </div>

                            </div>
                        </div>

                </div>
        </div>
</div>
@endsection