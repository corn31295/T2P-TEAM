<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Adidas Website Template | Checkout :: w3layouts Web bán giày</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{!! url('public/layoutbanhang/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{!! url('public/layoutbanhang/js/jquery.min.js') !!}"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="{!! url('public/layoutbanhang/css/megamenu.css') !!}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{!! url('public/layoutbanhang/js/megamenu.js') !!}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="{!! url('public/layoutbanhang/js/move-top.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/layoutbanhang/js/easing.js') !!}"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<style type="text/css">
	
	/* cart */
.cart-info table { width: 100%; margin-bottom: 20px; border-collapse: collapse; border-top: 1px solid #E7E7E7; border-left: 1px solid #E7E7E7; border-right: 1px solid #E7E7E7; background-color:#fff; }
.cart-info table tr { -webkit-transition: all 0.5s ease-in-out; -moz-transition: all 0.5s ease-in-out; -o-transition: all 0.5s ease-in-out; }
.cart-info table tr:hover { -webkit-transition: all 0.5s ease-in-out; -moz-transition: all 0.5s ease-in-out; -o-transition: all 0.5s ease-in-out; }
.cart-info td, .cart-info th { padding: 15px; }
.cart-info th { padding:10px }
.cart-info th { font-weight: bold; background-color: #eeeeee; border-bottom: 1px solid #E7E7E7; }
.cart-info th.quantity, .cart-info td.quantity { text-align: left; }
.cart-info th .price, .cart-info th .total, .cart-info tbody .price, .cart-info tbody .total { text-align: right; }
.cart-info th .quantity a { margin-top:-5px }
.cart-info tbody td { vertical-align: top; border-bottom: 1px solid #E7E7E7; }
.cart-info tbody .remove { vertical-align: middle; }
.cart-info tbody .remove, .cart-info tbody .image { text-align: center; }
.cart-info tbody .name, .cart-info tbody .model { text-align: left; }
.cart-info tbody span.stock { color: #F00; font-weight: bold; }
.cart-module .cart-heading { border: 1px solid #E7E7E7; padding: 8px 8px 8px 22px; font-weight: bold; font-size: 12px; margin-bottom: 15px; cursor: pointer; background: #ffffff url('../image/arrow-right.html') 10px 50% no-repeat; }
.cart-module .active { background: #ffffff url('../image/arrow-down.html') 7px 50% no-repeat; }
.cart-module .cart-content { padding: 0px 0px 15px 0px; display: none; overflow: auto; }
.cart-module > div { display: none; }
.cart-total { border-top: 1px solid #E7E7E7; overflow: auto; padding-top: 8px; margin-bottom: 15px; }
.cart-total table { float: right; }
.cart-total td { padding: 3px; text-align: right; }
.cartoptionbox { background:#fff; padding:15px; border:1px solid #ddd; margin-bottom:40px }
ul.total { font-size:16px; margin-top:5px; margin-right:10px }
ul.total li { padding:10px 0 }
ul.total li span.extra { width:150px; float:left; text-align:right; padding-right:20px }
.totalamout { font-size:22px; color:#f25c27 }
.heading1 .maintext {
    font-size: 28px;
    color: #5e626b;
    text-transform: uppercase;
    padding: 0px 14px 4px 0;
    font-family: 'Crete Round', serif;
}
}
</style>
</head>
<body>
  	@include ('layoutbanhang.header')
       <div class="login">
         <h1 class="heading1"><span class="maintext"> Giỏ hàng</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Hình</th>
            <th class="name">Tên sản phẩm</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Giá</th>
            <th class="total">Tổng tiền</th>
           
          </tr>
          @foreach($content as $item)
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="{!! asset('resources/upload/'.$item['options']['img']) !!}" height="50" width="50"></a></td>
            <td  class="name"><a href="{!! url('chi-tiet-san-pham', [$item->id, $item->alias]) !!}">{!! $item["name"] !!}</a></td>
            <td class="quantity"><input type="text" size="1" value='{!! $item["qty"] !!}' name="quantity[40]" class="span1">
             
             </td>
             
           
             
            <td class="price">{!! number_format($item["price"], 0, ",", ".")  !!}</td>
            <td class="total">{!! number_format($item["price"]*$item["qty"], 0, ",", ".")  !!}</td>
             
          </tr>
          @endforeach
        </table>
      </div>
		</div>
        @include('layoutbanhang.footer')
       	 <div class="copy">
       	   <div class="wrap">
       	 	  <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
       	   </div>
       	 </div>
       </div>
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>       
</body>
</html>