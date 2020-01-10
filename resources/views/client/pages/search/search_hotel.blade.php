@extends('client.layouts.master')
@section('content')
<div id="form-search">
    <div class="form-ifo-search">
        <form method="get" action="{{ asset('client/seahotel/') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pad-tb">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Tên khách sạn</label>
                                        <input class="txt-hotel" type="text" name="ks" placeholder="Tên khách sạn...">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Địa điểm</label>
                                        <select class="form-conttol input-md" name="dd" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option value="0">Địa điểm</option>
                                            @foreach($dd as $dd)
                                            <option value="{{ $dd->id }}">{{  $dd->name   }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Hạng sao</label>
                                        <select class="form-conttol input-md" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option value="0">Khách sạn 1 sao</option>
                                            <option value="1">Khách sạn 2 sao</option>
                                            <option value="2">Khách sạn 3 sao</option>
                                            <option value="3">Khách sạn 4 saog</option>
                                            <option value="4">Khách sạn 5 saog</option>
                                        </select>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Giá</label>
                                        <select class="form-conttol input-md" name="price" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option value="0">Chọn giá</option>
                                            <option value="1">Dưới 1tr</option>
                                            <option value="2">Từ 1tr - 3tr</option>
                                            <option value="3">Từ 3tr - 5tr</option>
                                            <option value="4">Trên 5tr</option>
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-search btn-mg-t">
                                            <i class="fas fa-search"></i>
                                            &nbsp;&nbsp;Tìm kiếm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@if($ks !='')
<div class="container">
<div class="lst-items" style="margin-left:0px;">
    <ul>
        @foreach($ks as $ks)
        <li>
            <div class="detail">
                <div class="img-prd">
                    <a href="#">
                        <img src="images/upload/hotel/{{ $ks->anh }}">
                    </a>
                    <div class="txt-prd">
                        <h3>
                            <a href="#" class="img">
                            <div class="pull-left"><i class="fas fa-map-marker-alt"></i>
                            {{$ks->Diadiem->name}}</div>
                            <div class="pull-right">
                                <img src="">
                            </div>
                            </a>
                        </h3>
                        <p>Địa chỉ : {{ $ks->diachi }}</p>
                    </div>
                </div>
                <div class="txt-blk">
                    <div class="rate-price">
                        <span>{{ number_format($ks->gia,'3') }} VNĐ</span>	
                    </div>
                    <h3 class="h3">
                        <a href="#">{{ $ks->name }}</a>
                    </h3>
                    <a href="#" class="bbb">Chi tiết</a>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
</div>
{{-- @elseif($gia != 0 && $ks =='')
<div class="container">
    <div class="lst-items" style="margin-left:0px;">
        <ul>
            @foreach($gia as $gia)
            <li>
                <div class="detail">
                    <div class="img-prd">
                        <a href="#">
                            <img src="{{ $gia->anh }}">
                        </a>
                        <div class="txt-prd">
                            <h3>
                                <a href="#" class="img">
                                <div class="pull-left"><i class="fas fa-map-marker-alt"></i>
                                Đà Nẵng</div>
                                <div class="pull-right">
                                    <img src="https://vinavivu.com/wp-content/themes/vinavivu/images/rate-5.png">
                                </div>
                                </a>
                            </h3>
                            <p>Địa chỉ : {{ $gia->diachi }}</p>
                        </div>
                    </div>
                    <div class="txt-blk">
                        <div class="rate-price">
                            <span>{{ $gia->gia }} VNĐ</span>	
                        </div>
                        <h3 class="h3">
                            <a href="#">{{ $gia->name }}</a>
                        </h3>
                        <a href="#" class="bbb">Chi tiết</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    </div> --}}
@endif

{{-- @if($diadiem != '')
<div class="main">
    <div class="container">
        <div class="main-content">
            <div class="tourdn">
                <div class="lst-items">
                    <ul>
                        @foreach($diadiem as $tour)
                        <li>
                            <div class="detail">
                                <a href="#">
                                    <img src="{{ $tour->anh }}">
                                    <span class="hot">HOT</span>
                                </a>
                                <div class="txt-blk">
                                    <div class="rate-price">
                                        <div class="rate">
                                        </div>
                                        <span>{{ $tour->gia }} VNĐ</span>	
                                    </div>
                                    <h3>
                                        <a href=""> {{ $tour->name }}</a>
                                    </h3>
                                    <span class="hk-lc"><i class="fas fa-map-marker-alt"></i> Địa điểm: <strong>Địa chỉ</strong></span>
                                    <span class="hk-lc"><i class="far fa-calendar-alt"></i> Thời gian: <strong>{{ $tour->thoigian }}</strong></span>
                                    <span class="hk-lc"><i class="far fa-clock"></i> Khởi hành: <strong>{{ $tour->ngaykhoihanh }}</strong></span>
                                    <a href="client/chitiet/{{ $tour->id }}" class="bbb">Chi tiết</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
   
</div>
@elseif($giatour != '')
    <div class="main">
        <div class="container">
            <div class="main-content">
                <div class="tourdn">
                    <div class="lst-items">
                        <ul>
                            @foreach($giatour as $tour)
                            <li>
                                <div class="detail">
                                    <a href="#">
                                        <img src="{{ $tour->anh }}">
                                        <span class="hot">HOT</span>
                                    </a>
                                    <div class="txt-blk">
                                        <div class="rate-price">
                                            <div class="rate">
                                            </div>
                                            <span>{{ $tour->gia }} VNĐ</span>	
                                        </div>
                                        <h3>
                                            <a href=""> {{ $tour->name }}</a>
                                        </h3>
                                        <span class="hk-lc"><i class="fas fa-map-marker-alt"></i> Địa điểm: <strong>Địa chỉ</strong></span>
                                        <span class="hk-lc"><i class="far fa-calendar-alt"></i> Thời gian: <strong>{{ $tour->thoigian }}</strong></span>
                                        <span class="hk-lc"><i class="far fa-clock"></i> Khởi hành: <strong>{{ $tour->ngaykhoihanh }}</strong></span>
                                        <a href="client/chitiet/{{ $tour->id }}" class="bbb">Chi tiết</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
       
    </div>
@else
<div class="container"><h1>Không tìm thấy</h1></div>
@endif --}}
@endsection