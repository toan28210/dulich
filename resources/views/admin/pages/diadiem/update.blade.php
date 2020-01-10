@extends('Admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thêm thông tin khách sạn</h6>
                </div>
                <div class="row" style="margin:5px">
                    <div class="col-lg-12">

                        <form role="form" method="post" action="/admin/updd/{{$dd->id}}" enctype="multipart/form-data">
                        @csrf
                            <fieldset class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" value="{{ $dd->name }}" placeholder="Vui lòng nhập tên của tour du lịch">
                                {{--  @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name')}}</div>
                                @endif  --}}
                            </fieldset>

                           

                            <fieldset class="form-group">
                                <label>Mô tả thông tin khách sạn</label>
                                <div class="col-md-12" style="margin-bottom: 30px;">
                                    <textarea name="mota"  id="ck_editor" name="ck_editor" placeholder="Vui lòng nhập mô tả sản phẩm">
                                        {{ $dd->mota }}
                                    </textarea>
                                </div>
                                {{--  @if($errors->has('mota'))
                                <div class="alert alert-danger">{{ $errors->first('mota')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="price">Hình ảnh minh họa</label>
                                <img src="{{$dd->anh}}" width="100px" height="100px" alt="">
                                <input type="file" name="anh" placeholder="">
                                
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>

                            

                            <fieldset class="form-group">
                                <label for="price">Địa chỉ</label>
                                <input class="form-control" value="{{ $dd->diachi }}" name="diachi" placeholder="Vui lòng nhập địa chỉ">
                                {{--  @if($errors->has('price'))
                                <div class="alert alert-danger">{{ $errors->first('price')}}</div>
                                @endif  --}}
                            </fieldset>

                            

                            <input type="hidden" name="soluotxem" value="0">
                            
                            <button type="submit" class="btn btn-success">Thêm</button>

                        </form>

                    </div>
                </div>
</div>
@endsection