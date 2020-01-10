@extends('client.layouts.master')
@section('content')
<div id="form-search">
    <div class="form-ifo-search">
        <form action="{{ asset('client/search/') }}" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pad-tb">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Nơi khởi hành</label>
                                        <select class="form-conttol input-md" name="noidi" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option value="">Nơi đi</option>
                                            @foreach($search as $tk)
                                            <option value="{{ $tk->noidi }}">{{ $tk->noidi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Nơi đến</label>
                                        <select class="form-conttol input-md" name="noiden" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option value="0">Nơi đến</option>
                                            @foreach($search as $tk)
                                            <option value="{{ $tk->noiden }}">{{ $tk->noiden }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Ngày khởi hành</label>
                                        <div class="pos-relative">
                                            <input type="date" name="departure_date" autocomplete="off" class="form-conttol" id="departure_date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Dòng tour</label>
                                        <select class="form-conttol input-md" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option value="0">Combo và Khuyến mãi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="lb">Giá</label>
                                        <select class="form-conttol input-md" name="gia" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
                                            <option>Giá</option>
                                            <option value="0">Dưới 1tr</option>
                                            <option value="1">Từ 1tr - 3tr</option>
                                            <option value="2">Từ 3tr - 5tr</option>
                                            <option value="3">Trên 5tr</option>
                                        </select>
                                    </div>
                                </div>

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
@if($diadiem != '')
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
                                    <img src="images/upload/product/{{ $tour->anh }}">
                                    <span class="hot">HOT</span>
                                </a>
                                <div class="txt-blk">
                                    <div class="rate-price">
                                        <div class="rate">
                                        </div>
                                        <span>{{ number_format($tour->gia,'3') }} VNĐ</span>	
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
                                        <img src="images/upload/product/{{ $tour->anh }}">
                                        <span class="hot">HOT</span>
                                    </a>
                                    <div class="txt-blk">
                                        <div class="rate-price">
                                            <div class="rate">
                                            </div>
                                            <span>{{ number_format($tour->gia,'3') }} VNĐ</span>	
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
@endif
@endsection