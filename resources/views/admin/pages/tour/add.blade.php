@extends('Admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thêm thông tin tour</h6>
                </div>
                <div class="row" style="margin:5px">
                    <div class="col-lg-12">

                        <form role="form" method="post" action="{{ route('tour.store') }}" enctype="multipart/form-data">
                        @csrf
                            <fieldset class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Vui lòng nhập tên của tour du lịch">
                                {{--  @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name')}}</div>
                                @endif  --}}
                            </fieldset>

                           

                            <fieldset class="form-group">
                                <label>Mô tả thông tin tour du lịch</label>
                                <div class="col-md-12" style="margin-bottom: 30px;">
                                    <textarea name="mota"  id="ck_editor" name="ck_editor" placeholder="Vui lòng nhập mô tả sản phẩm">
                                    </textarea>
                                </div>
                                {{--  @if($errors->has('mota'))
                                <div class="alert alert-danger">{{ $errors->first('mota')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="price">Giá</label>
                                <input class="form-control" name="gia" placeholder="Vui lòng nhập giá tour du lịch">
                                {{--  @if($errors->has('price'))
                                <div class="alert alert-danger">{{ $errors->first('price')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Promotion Price</label>
                                <input class="form-control" value="0" name="giakm" placeholder="Vui lòng nhập giá khuyến mãi">
                                {{--  @if($errors->has('km'))
                                <div class="alert alert-danger">{{ $errors->first('km')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="price">Hình ảnh minh họa</label>
                                <input type="file" name="anh" placeholder="Vui lòng nhập giá sản phẩm">
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>

                            <div class="form-group">
                                <label>Khách sạn</label>
                                <select class="form-control" name="idKhachsan">
                                    @foreach($hotel as $ht)
                                        <option value="{{$ht->id}}">{{$ht->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Địa điểm du lịch</label>
                                <select class="form-control" name="idDiadiem">
                                    @foreach($dd as $dd)
                                        <option value="{{$dd->id}}">{{$dd->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Ngày khởi hành</label>
                                <input type="date" name="ngaykhoihanh" id="">
                            </div>

                            <div class="form-group">
                                <label>Ngày kết thúc</label>
                                <input type="date" name="ngayketthuc">
                            </div>

                            <fieldset class="form-group">
                                <label for="price">Thời gian</label>
                                <input type="text" name="thoigian" placeholder="Vui lòng nhập thời gian Tour">
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="price">Giới thiệu</label>
                                <input type="text" name="gioithieu" placeholder="Giới thiệu sản phẩm">
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="price">Phương tiện</label>
                                <input type="text" name="phuongtien" placeholder="Giới thiệu sản phẩm">
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="price">Nơi đi</label>
                                <input type="text" name="noidi" placeholder="Nơi khởi hành">
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="price">Nơi đến</label>
                                <input type="text" name="noiden" placeholder="Nơi tham quan">
                                {{--  @if($errors->has('anh'))
                                <div class="alert alert-danger">{{ $errors->first('anh')}}</div>
                                @endif  --}}
                            </fieldset>
                            <input type="hidden" name="soluotxem" value="0">
                            
                            <button type="submit" class="btn btn-success">Thêm</button>

                        </form>

                    </div>
                </div>
</div>
@endsection