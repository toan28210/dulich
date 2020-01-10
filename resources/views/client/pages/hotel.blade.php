@extends('client.layouts.master')
@section('content')
	<div class="container-fluid" style="background: #ddd; height: 50px; margin-top: -19px">
		<div class="container rumb">
				<span>
					<a href="file:///D:/Web/Webcuoiky/text/slider.html">Trang chủ</a>
				</span>
				<i class="fas fa-angle-right"></i>
				<span>Khách sạn
				</span>
		</div>
	</div>
	<div class="main">
		<div class="container">
			<div class="main-content">
				<div>
					<div class="box-tour size2">
						<h1><i class="fas fa-globe-europe"></i>Khách sạn</h1>
					</div>
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
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
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
					<div class="lst-items" style="margin-left:0px;">
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
													<img src="https://vinavivu.com/wp-content/themes/vinavivu/images/rate-5.png">
												</div>
												</a>
											</h3>
											<p>Địa chỉ : {{ $hotel->diachi }}</p>
										</div>
									</div>
									<div class="txt-blk">
										<div class="rate-price">
											<span>{{ $hotel->gia }} VNĐ</span>	
										</div>
										<h3 class="h3">
											<a href="#">{{ $hotel->name }}</a>
										</h3>
										<a href="#" class="bbb">Chi tiết</a>
									</div>
								</div>
                            </li>
                            @endforeach
						</ul>
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