<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SimpleOne - A Responsive Html5 Ecommerce Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'><link href="{!! url('public/layout/css/bootstrap.css') !!}" rel="stylesheet">
<link href="{!! url('public/layout/css/bootstrap-responsive.css') !!}" rel="stylesheet">
<link href="{!! url('public/layout/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('public/layout/css/flexslider.css') !!}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{!! url('public/layout/css/jquery.fancybox.css') !!}" rel="stylesheet">
<link href="{!! url('public/layout/css/cloud-zoom.css') !!}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>
  @include('layout.header')
</header>
<!-- Header End -->

<div id="maincontainer">
  <section id="product">
    <div class="container">
      <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Login</li>
      </ul>
       <!-- Account Login-->
      <div class="row">  
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Đăng nhập</span></h1>
          <section class="newcustomer">
            <h2 class="heading2">Đăng kí tài khoản mới </h2>
            <div class="loginbox">
              
              <a href="#" class="btn btn-orange">Đăng kí</a>
            </div>
          </section>
          <section class="returncustomer">
            <h2 class="heading2">Đăng nhập tài khoản </h2>
            <div class="loginbox">
              <form class="form-vertical" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                  <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                  <button type="submit" class="btn btn-orange">Đăng nhập</button>
                </fieldset>
              </form>
            </div>
          </section>
        </div>
        
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
@include('layout.footer')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('public/layout/js/jquery.js') !!}"></script>
<script src="{!! url('public/layout/js/bootstrap.js') !!}"></script>
<script src="{!! url('public/layout/js/respond.min.js') !!}"></script>
<script src="{!! url('public/layout/js/application.js') !!}"></script>
<script src="{!! url('public/layout/js/bootstrap-tooltip.js') !!}"></script>
<script defer src="{!! url('public/layout/js/jquery.fancybox.js') !!}"></script>
<script defer src="{!! url('public/layout/js/jquery.flexslider.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/layout/js/jquery.tweet.js') !!}"></script>
<script  src="{!! url('public/layout/js/cloud-zoom.1.0.2.js') !!}"></script>
<script  type="text/javascript" src="{!! url('public/layout/js/jquery.validate.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/layout/js/jquery.carouFredSel-6.1.0-packed.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/layout/js/jquery.mousewheel.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/layout/js/jquery.touchSwipe.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/layout/js/jquery.ba-throttle-debounce.min.js') !!}"></script>
<script defer src="{!! url('public/layout/js/custom.js') !!}"></script><strong></strong>
</body>
</html>