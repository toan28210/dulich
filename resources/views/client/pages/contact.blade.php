@extends('client.layouts.master')
@section('content')
<div class="container-fuild">
    <div class="container rumb">
        <div class="row">
            <span>
                <a href="file:///D:/Web/Webcuoiky/text/slider.html">Trang chủ</a>
            </span>
            <i class="fas fa-angle-right"></i>
            <span>Liên hệ
            </span>
        </div>
    </div>
</div>
<div class="container-fuild" style="background: #fff; height: auto; ">
    <div class="container">
        <div class="col-sm-3">
            <div class="sidebar">
                <div class="related-post">
                    <h3 class="related">
                        <span>TÌM KIẾM</span>
                    </h3>
                    <div class="container-fuild" style="padding: 10px; background: #ddd;">
                        <form action="{{ asset('client/searchtour/') }}" method="get">
                            <div class="container-search">
                                <div class="search-input">
                                    <input type="text" name="tukhoa"  placeholder="Từ khóa">
                                    <input type="hidden" name="nd_tour">
                                </div>
                            </div>
                            <input class="a-timkiem btn btn-info" style="margin-top: 20px;" type="submit" value="TÌM KIẾM" name="submit" id="">
                        </form>
                       
                    </div>
                    <div class="container-fuild" style="border: 1px solid #ddd; background: #fff; margin-bottom: 30px;">
                        <div class="bm-new">
                            <h3>Tin mới</h3>
                            <div class="new-ma">
                                <ul class="row">
                                    @foreach($new as $new)
                                    <li class="col-md-12">
                                        <div class="belenba">
                                            <a href="#" class="img1">
                                                <img src="{{$new->thumbnail}}">
                                            </a>
                                            <div class="txt-new">
                                                <h4>{{$new->title}}</h4>
                                                <span>{{$new->description}}</span>
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
        </div>
        <div class="col-sm-9" style="">
            <div class="hk-title">
                <h1>Liên hệ</h1>
            </div>
            <div class="txt-center">
                <h2>
                    <strong>ĐỊA CHỈ: </strong><span>&nbsp; KÝ TÚC XÁ CAO ĐẲNG CÔNG NGHỆ THÔNG TIN, Đ.NAM KỲ KHỞI NGHĨA, Q.NGŨ HÀNH SƠN, TP.ĐÀ NẴNG</span>
                </h2>
                    <p style="font-weight: bold;">Số điện thoại: 0899 856 574</p>
                    <p>Mã số thuế:12345678998765</p>
                    <p>Người đại diện: Bùi Đình Nhã</p>
                    <p><span>Email: </span>buidinhnha2000@gmail.com</p>
                    <span>http://Webcuoiky</span>
                    <div class="container" style="width:100%; height:400px;" id="map"></div>
            </div>

            <div class="container-fluid bl" style="margin-top: 20px;margin-bottom: 20px;">
                <form style="width: 100%;">
                    <p>
                        <input type="text" placeholder="Họ và tên">
                    </p>
                    <p>
                        <input type="text" placeholder="Địa chỉ email">
                    </p>
                    <p>
                        <input type="text" placeholder="Tiêu đề">
                    </p>
                    <p style="border: none;">
                        <span>
                            <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Thông điệp"></textarea>
                        </span>
                    </p>
                        <button>Gửi đi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection