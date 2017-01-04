<div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="index-2.html" class="logo pull-left"><img src="img/logo.png" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  @if(!isset($nguoidung))
                    <li><a class="home active" href="#">Trang chủ</a>
                    </li>
                    <!--<li><a class="myaccount" href="#">My Account</a>
                    </li>-->
                    <li><a class="myaccount" href="{!! url('/dangnhap') !!}">Đăng nhập</a>
                    </li>
                    <li><a class="myaccount" href="#">Đăng kí</a>
                    </li>
                  @else
                    <!--<li><a class="shoppingcart" href="#">Shopping Cart</a>
                    </li>
                    <li><a class="checkout" href="#">CheckOut</a>
                    </li>-->
                    <li>
                      <a><span class="glyphicon glyphicon-user"></span>{{$nguoidung->name}}</a>
                    </li>
                    <li><a class="myaccount" href="{{ url('/auth/logout') }}">Đăng xuất</a>
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
        </div>
      </div>
    </div>
  </div>