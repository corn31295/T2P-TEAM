<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{!! $chitiet_sanpham->name !!}</title>
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
  <div class="container">
  @include('layout.category')
    
  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span5">
          <ul class="thumbnails mainimage">
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{!! asset('resources/upload/'.$chitiet_sanpham->image) !!}">
                <img src="{!! asset('resources/upload/'.$chitiet_sanpham->image) !!}" alt="" title="">
              </a>
            </li>
            @foreach($image as $item)
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{!! asset('resources/upload/'.$item->image) !!}">
                <img  src="{!! asset('resources/upload/'.$item->image) !!}" alt="" title="">
              </a>
            </li>
            @endforeach
            
          </ul>
          <ul class="thumbnails mainimage">
            @foreach($image as $item)
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="{!! asset('resources/upload/'.$item->image) !!}" alt="" title="">
              </a>
            </li>
            @endforeach
            
          </ul>
        </div>
         <!-- Right Details-->
        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="productname"><span class="bgnone">{!! $chitiet_sanpham->name !!}</span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>{!! number_format($chitiet_sanpham->price,0,",",".") !!}</div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="{!! url('mua-hang',[$chitiet_sanpham->id, $chitiet_sanpham->alias]) !!}">Thêm vào giỏ hàng</a>
                </li>
              </ul>
         <!-- Product Description tab & comments-->
         <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Mô tả</a>
                  </li>
                  
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    {!! $chitiet_sanpham->content !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Related Products-->
  <section id="related" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sản phẩm liên quan</span></h1>
      <ul class="thumbnails">
        @foreach($sanpham_lienquan  as $item)
        <li class="span3">
          <a class="prdocutname" href="{!! url('chi-tiet-san-pham', [$item->id, $item->alias]) !!}">{!! $item->name !!}</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="{!! url('chi-tiet-san-pham', [$item->id, $item->alias]) !!}"><img alt="" src="{!! asset('resources/upload/'.$item->image) !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="{!! url('mua-hang',[$item->id, $item->alias]) !!}" class="productcart">Thêm vào giỏ hàng</a>
              <div class="price">
                <div class="pricenew">{!! number_format($item->price,0,",",".") !!}</div>
                <div class="priceold"></div>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  <!-- Popular Brands-->
</div>

<!-- Footer -->
<footer id="footer">
  
  <section class="footerlinks">
    <div class="container">
      <div class="info">
        <ul>
          <li><p >0966.535.221 - Huỳnh Phi/</p>
          </li>
          <li><p >0933.006.222 - Vương Châu/</p>
          </li>
          <li><p >0167.384.2256 - Nguyễn Duy</p>
          </li>
        </ul>
      </div>
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"> Web bán hàng - nhóm đồ án DuyAfrica </div>
        <div class="span6 textright"> DuyAfrica@2016 </div>
      </div>
    </div>
  </section>
  <a id="gotop" href="#">Back to top</a>
</footer>
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
<script defer src="{!! url('public/layout/js/custom.js') !!}"></script>
</body>
</html>