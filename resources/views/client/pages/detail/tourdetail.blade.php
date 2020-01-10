@extends('client.layouts.master')
@section('content')
	<div class="container-fluid" style="background: #ddd; height: 50px; margin-top: -19px">
		<div class="container rumb">
				<span>
					<a href="file:///D:/Web/Webcuoiky/text/slider.html">Trang chủ</a>
				</span>
				<i class="fas fa-angle-right"></i>
				<span>Thông tin
				</span>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container" style="margin-top: 20px;margin-bottom: 20px;">
			<div class="img-anh col-sm-5">
				<img src="images/upload/product/{{$tour->anh}}">
			</div>
			<div class="col-sm-7">
				<h1 class="tit">
					<span class="tm">{{ $tour->name }}</span>
				</h1>
				<p class="ster">
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
				</p>
				<div class="like" style="float: left; margin-right: 5px;">
					<button><i class="fas fa-thumbs-up"></i> <strong>Thích</strong> 79</button>
				</div>
				<div class="like" style="float: left;">
					<button><strong>Chia sẻ</strong></button>
				</div>
				<div class="gt" style="clear: both; padding-bottom: 10px;">
					<h3 class="gth3">Giới thiệu</h3>
					<span>{{ $tour->gioithieu }}</span>
				</div>
				<div class="dxp" style="margin-top: 20px;">
					<p><span><strong>Điểm xuất phát :</strong> Đà Nẵng</span></p>
					<p><span><strong>Thời gian tour :</strong> {{ $tour->thoigian }}</span></p>
                    <p><span><strong>Phương tiện :</strong> {{ $tour->phuongtien }}</span></p>
                    @foreach($dd as $dd)
                    @if($dd->id == $tour->idDiadiem)
                    <p><span><strong>Địa điểm đến tham quan :</strong> {{ $dd->name }}</span></p>
                    @endif
                    @endforeach
					<p><span><strong>Chi phí :</strong> {{ $tour->gia }} Đ</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="container">
			<div class="main-content">
				<div class="col-sm-8">
					{!! $tour->mota !!}
					<div><i class="far fa-eye"></i> {{ $tour->soluotxem }} lượt xem</div>
					<input type="hidden" name="soluotxem" id="soluotxem" value="{{ $tour->soluotxem + 1 }}">
					<script src="acsset/client/js/xem.js"></script>
					
					<div class="" style="margin-top: 20px;border-top: 1px solid #ccc; padding-top: 20px;">
						<div class="binhluan" style="text-align:left; clear:both;margin-top:100px;background: white;padding: 20px; margin-bottom: 20px;">
							<h3>Bình luận</h3>
							<form id="form-comment">
								<input type="hidden" value="{{ $tour->id }}" name="idTour" id="idTour">
							<div class="form-group">
								<label for="usr">Email:</label>
								<input type="text" class="form-control email" id="email" name="email">
							  </div>
							  <div class="form-group">
								<label for="pwd">Tên hiển thị:</label>
								<input type="text" class="form-control name" id="name" name="name">
							  </div>
							  <div class="form-group">
								<label for="comment">Bình luận:</label>
								<textarea class="form-control content" rows="5" id="con_comment" name="con_comment"></textarea>
							  </div>
								  <input class="btn btn-warning guicomment" id="submit" name="submit" type="button" value="Gửi">
								  <div id="erorr"></div>
							</form>
							<script src="acsset/client/js/comment.js"></script>
							<div id="commentContainer">
							@foreach($comment as $comment)
							<div class="form-group" id="postList">
								<div class="journalrow" style="padding: 10px 0;">
									<div class="author" style="overflow: hidden;float: left;">
										<img style="max-width:40px;" src="" alt="Author">
										<span class="cmreply">Trả lời</span>
									</div>
									<div style="margin-left: 60px;">
										<div class="journalsummary" style="padding:5px;border:1px solid #d8d8d8;position:relative;">
											<i style="position:absolute; top:5px;left:-7px; font-size:20px;line-height: 11px;background-color:#fff; color: #d8d8d8;" class="fa fa-angle-left"></i>
											<span style="font-weight:700;color:#03f;font-size:13px;" class="authorname">{{ $comment->name }}</span>
											<span style="background:none; border:1px solid #209cee;color:#209cee;font-size: 11px;font-weight: 400;margin-left: 5px;padding: 1px 4px;border-radius: 3px;" class="member">Thành viên</span>
											<abbr title="">
												<i class="fa fa-clock-o">{{ $comment->created_at }}</i> 
											</abbr>
											<div class="summary">{{ $comment->con_comment }}</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							</div>
						</div>
						<style>
							.cmreply {
								display: block;
								padding: 3px 4px;
								background: green;
								color: #fff;
								margin: 5px 0 0;
								-moz-border-radius: 3px;
								-webkit-border-radius: 3px;
								-khtml-border-radius: 3px;
								border-radius: 3px;
								font-weight: 700;
								font-size: 10px;
								cursor: pointer;
							}
							.journalrow abbr {
								border-style: none;
								font-size: 11px;
								border: none;
								color: #999;
								margin: 4px 0 3px;
								padding: 4px 0 0 5px;
								white-space: nowrap;
							}
							.journalsummary div {
								display: block;
								padding: 7px 0 0;
								word-wrap: break-word;
							}
						</style>

					</div>
				</div>
	

				<div class="col-sm-4">
					<div class="row">
						<div class="txt mbd">
							<h3>Bài viết yêu thích</h3>
						</div>
						<div class="bvyt">
							<ul>
								@foreach($yt_tour as $key => $value)
								<li>
									<div class="list-items"> 
										<div class="chinhdt" style="float: left;">
											<a href="" class="img">
												<img src="images/upload/product/{{ $value->anh }}">
												<span class="stt vt{{ $key+1 }}">0{{ $key+1 }}</span>
											</a>
										</div>
										<div class="bvyt-text" style="float: left;">
											<a href=""><b>{{ $value->name }}</b></a>
											<span>{{ $value->created_at }}</span>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
							<div class="container-fuild e2" style="margin-top: 20px;">
								<div class="tab e1">
									 <button class="tablinks" onclick="openCity(event, 'moi')">Mới</button>
									 <button class="tablinks" onclick="openCity(event, 'yt')">Yêu thích</button>
									 <button class="tablinks" onclick="openCity(event, 'bl')">Bình luận</button>
								</div>

								<div id="moi" class="tabcontent" style="display: block; border: 1px solid #ddd;border-top: none;">
								    <div class="tab-pane">
										<ul>
											<li>
												<a href="#">
													<img src="https://media.foody.vn/res/g10/92558/prof/s1242x600/foody-mobile-bia-jpg.jpg">
												</a>
												<div class="tab-text">
													<span>Top Beer - Beer Club</span>
													<ul style="display: flex;">
														<li><span>16/05/2019</span></li>
														<li><span>0 COMMENT</span></li>
													</ul>
												</div>
											</li>
											<li>
												<a href="#">
													<img src="https://media.foody.vn/res/g10/92558/prof/s1242x600/foody-mobile-bia-jpg.jpg">
												</a>
												<div class="tab-text">
													<span>Top Beer - Beer Club</span>
													<ul style="display: flex;">
														<li><span>16/05/2019</span></li>
														<li><span>0 COMMENT</span></li>
													</ul>
												</div>
											</li>
											<li>
												<a href="#">
													<img src="https://media.foody.vn/res/g10/92558/prof/s1242x600/foody-mobile-bia-jpg.jpg">
												</a>
												<div class="tab-text">
													<span>Top Beer - Beer Club</span>
													<ul style="display: flex;">
														<li><span>16/05/2019</span></li>
														<li><span>0 COMMENT</span></li>
													</ul>
												</div>
											</li>
											<li>
												<a href="#">
													<img src="https://media.foody.vn/res/g10/92558/prof/s1242x600/foody-mobile-bia-jpg.jpg">
												</a>
												<div class="tab-text">
													<span>Top Beer - Beer Club</span>
													<ul style="display: flex;">
														<li><span>16/05/2019</span></li>
														<li><span>0 COMMENT</span></li>
													</ul>
												</div>
											</li>
											<li>
												<a href="#">
													<img src="https://www.baodanang.vn/dataimages/201905/original/images1514513_61542064_1238975226268312_5417679667094093824_n.jpg">
												</a>
												<div class="tab-text">
													<span>Lễ hội pháo hoa</span>
													<ul style="display: flex;">
														<li><span>16/05/2019</span></li>
														<li><span>0 COMMENT</span></li>
													</ul>
												</div>
											</li>

										</ul>
									</div>
								</div>

									<div id="yt" class="tabcontent" style="height: 1311px;padding: 10px; border: 1px solid #ddd; text-align: center;">
									  <p>Không có gì để  xem</p> 
									</div>

									<div id="bl" class="tabcontent" style="height: 1311px;padding: 10px; border: 1px solid #ddd; text-align: center;">
									  <p>Không có ai bình luận</p>
									</div>
								<script>
									function openCity(evt, cityName) {
									  var i, tabcontent, tablinks;
									  tabcontent = document.getElementsByClassName("tabcontent");
									  for (i = 0; i < tabcontent.length; i++) {
									    tabcontent[i].style.display = "none";
									  }
									  tablinks = document.getElementsByClassName("tablinks");
									  for (i = 0; i < tablinks.length; i++) {
									    tablinks[i].className = tablinks[i].className.replace(" active", "");
									  }
									  document.getElementById(cityName).style.display = "block";
									  evt.currentTarget.className += " active";
									}
								</script>
							</div>
							<div class="container-fuild">
								<div class="bvm">
									
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
	@endsection