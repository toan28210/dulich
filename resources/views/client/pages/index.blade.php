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
<div class="main">
    <div class="container">
        <div class="main-content">
            <div class="tourdn">
                <div class="box-tour">
                    <h1><i class="fas fa-globe-europe"></i>Tour Đà Nẵng</h1>
                </div>
                <div class="lst-items" style="margin-left: 0px;">
                    <ul>
                        @foreach($tour as $tour)
                        <li>
                            <div class="detail">
                                <a href="client/chitiet/{{ $tour->id }}">
                                    <img src="images/upload/product/{{$tour->anh}}">
                                    <span class="hot">HOT</span>
                                </a>
                                <div class="txt-blk">
                                    <div class="rate-price">
                                        <div class="rate">
                                        </div>
                                        <span>{{ number_format($tour->gia,'3') }} VNĐ</span>	
                                    </div>
                                    <h3>
                                        <a href="client/chitiet/{{ $tour->id }}"> {{ $tour->name }}</a>
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
            <div>
                <div class="box-tour size">
                    <h1><i class="fas fa-globe-europe"></i>Tour nổi bật</h1>
                </div>
                <div class="lst-items" style="margin-left: 0px;">
                    <ul>
                        @foreach($hot_tour as $hot)
                        <li>
                            <div class="detail">
                                <a href="client/chitiet/{{ $hot->id }}">
                                    <img src="images/upload/product/{{$hot->anh}}">
                                    <span class="hot">HOT</span>
                                </a>
                                <div class="txt-blk">
                                    <div class="rate-price">
                                        <div class="rate">
                                            
                                        </div>
                                        <span>{{ number_format($hot->gia,'3') }} VNĐ</span>	
                                    </div>
                                    <h3>
                                        <a href="client/chitiet/{{ $hot->id }}"> {{ $hot->name }}</a>
                                    </h3>
                                    <span class="hk-lc"><i class="fas fa-map-marker-alt"></i> Địa điểm: <strong>Đà Nẵng</strong></span>
                                    <span class="hk-lc"><i class="far fa-calendar-alt"></i> Thời gian: <strong>{{ $hot->thoigian }}</strong></span>
                                    <span class="hk-lc"><i class="far fa-clock"></i> Khởi hành: <strong>{{ $hot->ngaykhoihanh }}</strong></span>
                                    <a href="client/chitiet/{{ $hot->id }}" class="bbb">Chi tiết</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <div class="box-tour size2">
                    <h1><i class="fas fa-globe-europe"></i>Khách sạn</h1>
                </div>
                <div class="lst-items" style="margin-left: 0px;">
                    <ul>
                        @foreach($hotel as $hotel)
                        <li>
                            <div class="detail">
                                <div class="img-prd">
                                    <a href="#">
                                        <img src="images/upload/hotel/{{ $hotel->anh }}">
                                    </a>
                                    <div class="txt-prd">
                                        <h3>
                                            <a href="#" class="img">
                                            <div class="pull-left"><i class="fas fa-map-marker-alt"></i>
                                            Đà Nẵng</div>
                                            <div class="pull-right">
                                                <img src="">
                                            </div>
                                            </a>
                                        </h3>
                                        <p>Địa chỉ :  {{ $hotel->diachi }}</p>
                                    </div>
                                </div>
                                <div class="txt-blk">
                                    <div class="rate-price">
                                        <div class="rate">
                                            
                                        </div>
                                        <span>{{ number_format($hotel->gia,'3') }} VNĐ</span>	
                                    </div>
                                    <h3 class="h3">
                                        <a href="#">{{ $hotel->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="ddnb">
            <div class="container">
                <h2 style="color:black;">Điểm đến nổi bật</h2>
                <p style="color:black;">Top điểm đến hấp dẩn nên khám phá</p>
                <div class="slider22">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="banner1" style="background:transparent;"></div>
              <div class="carousel-caption">
                  @foreach($dd as $dd)
                <div class="detail1">
                        <a href="#">
                            <img src="images/upload/diadiem/{{ $dd->anh }}">
                        </a>
                        <h3>
                            <a href="#">{{ $dd->name }}</a>
                        </h3>
                    </div>
                    @endforeach
              </div>
            </div>
            <div class="item">
               <div class="banner1" style="background:transparent;"></div>
              <div class="carousel-caption">
                  @foreach($dd1 as $diadiem)
                <div class="detail1">
                        <a href="#">
                            <img src="images/upload/diadiem/{{ $diadiem->anh }}">
                        </a>
                        <h3>
                            <a href="#">{{ $diadiem->name }}</a>
                        </h3>
                    </div>
                    @endforeach
              </div>
            </div>
      </div>
    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-content">
            <div class="tourdn">
                <div class="box-tour">
                    <h1><i class="fas fa-globe-europe"></i>ĐỊA ĐIỂM DU LỊCH</h1>
                </div>
                <div class="menu-dd">
                    @for($i =0; $i<3;$i++)
                    <div class="cs dd-left col-sm-4">
                        <ul>
                            @foreach($dd2 as $did)
                            <li><a href="#"><i class="fas fa-angle-right"></i>{{ $did ->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection