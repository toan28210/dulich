<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/client/">TRAVEL</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/client/">Trang chủ</a></li>
      <li><a href="/client/introduct">Giới thiệu</a></li>
      <li><a href="client/tour">Tour</a></li>
      <li><a href="client/hotel">Khách sạn</a></li>
      <li><a href="client/contact">Liên hệ</a></li>
      @if(Auth::check())
      @if(Auth::user()->phanquyen == 1)
      <li><a href="/admin/">Quản trị</a></li>
      @endif
      <li><a href="">{{Auth::user()->name}}</a></li>
      <li><a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Đăng xuất') }}
     </a>
     </li>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
      @else
      <li><a href="">Đăng nhập</a></li>
      @endif
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>