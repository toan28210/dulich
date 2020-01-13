@extends('client.layouts.master')
@section('content')
	
	<div class="container-fluid" style="background: #ddd; height: 50px; margin-top: -19px">
		<div class="container rumb">
				<span>
					<a href="/client">Trang chủ</a>
				</span>
				<i class="fas fa-angle-right"></i>
				<span>Tour du lịch
				</span>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container" style="background: #fff;">
			<div class="col-sm-4">

				<form action="{{ asset('client/searchtour/') }}" method="get">
					<div class="related-post">
						<h3 class="related">
								<span>TÌM KIẾM</span>
							</h3>
							<div class="container-fuild" style="padding: 10px; background: #ddd;">
								<div class="container-search">
									<div class="search-input">
										<input type="timkiem" name="tukhoa" placeholder="Từ khóa">
									</div>
								</div>
								<div class="sele" style="margin-top: 10px;">
									<select name="nd_tour" class="form-conttol input-md" style="-webkit-appearance: menulist-button!important;line-height: 30px!important">
											<option value="0">Nơi đến</option>
										@foreach($nd_tour as $nd)
											<option value="{{ $nd->name }}">{{ $nd->name }}</option>
										@endforeach
									</select>
								</div>
								<input class="a-timkiem btn btn-info" style="margin-top: 20px;" type="submit" value="Tìm kiếm" name="submit" id="">
							</div>
					</div>
				</form>
				<div class="row">
						<div class="txt mbd">
							<h3>Bài viết yêu thích</h3>
						</div>
						<div class="bvyt bubam">
							<ul>
								
								@foreach($yt_tour as $key=>$value)
								<li>
									<div class="list-items tt"> 
										<div style="float: left; width: 40%;">
											<a href="client/chitiet/{{ $value->id }}" class="img">
												<img src="images/upload/product/{{$value->anh}}">
												<span class="stt vt{{$key + 1}}">0{{$key + 1}}</span>
											</a>
										</div>
										<div class="bvyt-text" style="float: left;">
											<a href="client/chitiet/{{ $value->id }}"><b>{{$value->name}}</b></a>
											<span>{{ $value->create_at }}</span>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
							<div class="container-fuild">
								<div class="bvm">
									
								</div>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="bm-new">
								<h3>Tin mới</h3>
								<div class="new-ma">
									<ul class="row">
										@foreach($tintuc as $tintuc)
										<li class="col-md-12">
											<div class="belenba">
												<a href="" class="img1">
													<img src="{{$tintuc->thumbnail}}">
												</a>
												<div class="txt-new">
													<h4>{{$tintuc->title}}</h4>
													<span>{{$tintuc->description}}</span>
												</div>
											</div>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
							
						</div>
			</div>
			<style>
				.lst-items {
					height: auto;
					min-height: 1px;
					/* margin-left: -20px; */
				}
			</style>
			<div class="col-sm-8">
				<div class="row">
				<div class="detalss" style="margin-top: 20px;">
					<ul>
						@foreach($tour as $tour)
						<li>
							<div class="img-tt">
								<img src="images/upload/product/{{$tour->anh}}" alt="" width="100%">
							</div>
							<div class="txt-tt" style="min-height:160px;">
								<span class="mauchu"><h3>{{ $tour->name }}</h3></span>
								<span>{{ number_format($tour->gia,'3') }} VNĐ</span>
								<p style="text-align: center; height: 30px; margin-top: 20px;"><a style="padding: 8px 16px; background: #2d9bf3; border-radius: 5px; color: #fff;" href="client/chitiet/{{ $tour->id }}">Xem thông tin</a></p>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="main">
		<div class="container">
			<div class="main-content">
				<div class="tourdn">
					<div class="box-tour">
						<h1><i class="fas fa-globe-europe"></i>ĐỊA ĐIỂM DU LỊCH</h1>
					</div>
					<div class="menu-dd">
						<div class="cs dd-left col-sm-4">
							<ul>
								<li><a href="#"><i class="fas fa-angle-right"></i>Bà Nà Hills</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Asian Park </a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Bãi Biển Mỹ Khê</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Suối khoáng nóng núi Thần Tài</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Cầu Rồng</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i> Cầu Tình Yêu </a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Cù Lao Chàm</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Rạn Nam Ô</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Làng Vân</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Đồng Xanh Đồng Nghệ</a></li>
							</ul>
						</div>
						<div class="cs dd-content col-sm-4">
							<ul>
								<li><a href="#"><i class="fas fa-angle-right"></i>Bà Nà Hills</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Asian Park </a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Bãi Biển Mỹ Khê</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Suối khoáng nóng núi Thần Tài</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Cầu Rồng</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i> Cầu Tình Yêu </a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Cù Lao Chàm</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Rạn Nam Ô</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Làng Vân</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Đồng Xanh Đồng Nghệ</a></li>
							</ul>
						</div>
						<div class="cs dd-right col-sm-4">
							<ul>
								<li><a href="#"><i class="fas fa-angle-right"></i>Bà Nà Hills</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Asian Park </a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Bãi Biển Mỹ Khê</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Suối khoáng nóng núi Thần Tài</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Cầu Rồng</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i> Cầu Tình Yêu </a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Cù Lao Chàm</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Rạn Nam Ô</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Làng Vân</a></li>
								<li><a href="#"><i class="fas fa-angle-right"></i>Đồng Xanh Đồng Nghệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-menu">
				<div class="footer-left col-sm-3">
					<p>Thông tin liên hệ</p>
					<hr>
					<div class="logo-footer">
						LOGO
					</div>
					<div class="vv">Các bạn có thể tìm kiếm các tour du lịch tại trang web của chúng tôi</div>
					<ul>
						<li><a href="#"><i class="fas fa-home"></i>  Đường Nam Kỳ Khởi Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, Thành Phố Đà Nẵng</a></li>
						<li><a href="#"><i class="fas fa-envelope-open"></i>  buidinhnha2000@gmail.com</a></li>
						<li><a href="#"><i class="fas fa-phone"></i>  0899 856 574</a></li>
						<li><a href="#"><i class="fas fa-globe-americas"></i>  Website : Nhãbestweb</a></li>
					</ul>
				</div>
				<div class="footer-content col-sm-3">
					<p>Tài khoản</p>
					<hr>
					<ul>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Giới thiệu</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Tài khoản</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Yêu thích</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Liên hệ</a></li>
					</ul>
				</div>
				<div class="footer-right col-sm-3">
					<p>Thông tin</p>
					<hr>
					<ul>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Home</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Giới thiệu</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Yêu thích</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Tour Đà Nẵng</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Tour du lịch</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Địa điểm du lịch</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i>Liên hệ</a></li>
					</ul>
				</div>
				<div class="content col-sm-3">
					<p>Đăng ký</p>
					<hr>
					<div class="pp">
						<i class="fas fa-envelope"></i>
						<p>Nhập mail để nhận thông báo mới nhất khi có khuyến mãi</p>
					</div>
					<div class="mail-text">
						<input type="text" placeholder="Email" name="">
						<a href="#">Đăng ký</a>
					</div>
					<div class="cotent-logo">
						<ul>
							<li class="a1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection