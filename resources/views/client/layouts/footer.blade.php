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
<script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 15.9754965, lng: 108.2462874},
        zoom: 13
      });
      var uluru = {lat: 15.9754965, lng: 108.2462874};
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_0nosnB4cq9rJtrw19Oqtc-LfOYVlaCo&callback=initMap"
    async defer></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>