<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Giỏ hàng - Web bán giày</title>
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
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Shopping Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Giỏ hàng</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Hình</th>
            <th class="name">Tên sản phẩm</th>
            <th class="quantity">Số lượng</th>
              <th class="total">Xóa</th>
            <th class="price">Giá</th>
            <th class="total">Tổng tiền</th>
           
          </tr>
          @foreach($content as $item)
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="{!! asset('resources/upload/'.$item['options']['img']) !!}" height="50" width="50"></a></td>
            <td  class="name"><a href="{!! url('chi-tiet-san-pham', [$item->id, $item->alias]) !!}">{!! $item["name"] !!}</a></td>
            <td class="quantity"><input type="text" size="1" value='{!! $item["qty"] !!}' name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <!--<a href="#"><img class="tooltip-test" data-original-title="Update" src="{!! asset('public/layout/img/update.png') !!}" alt=""></a>-->
              <a href="{!! url('xoa-san-pham', ['id'=>$item['rowid']]) !!}"><img class="tooltip-test" data-original-title="Xóa"  src="{!! asset('public/layout/img/remove.png') !!}" alt=""></a></td>
           
             
            <td class="price">{!! number_format($item["price"], 0, ",", ".")  !!}</td>
            <td class="total">{!! number_format($item["price"]*$item["qty"], 0, ",", ".")  !!}</td>
             
          </tr>
          @endforeach
        </table>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered "
              <tr>
                <td><span class="extra bold totalamout">Tổng tiền :</span></td>
                <td><span class="bold totalamout">{!! $tongtien !!}</span></td>
              </tr>
            </table>
            <input type="submit" value="CheckOut" class="btn btn-orange pull-right">
            <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10">
          </div>
        </div>
        </div>
    </div>
  </section>
</div>

<!-- Footer -->
@include('layoutbanhang.footer')
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