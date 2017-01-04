<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Adidas Website Template | Login :: w3layouts Web bán giày</title>
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
</head>
<body>
	@include('layoutbanhang.header')
       <div class="login">
          <div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Đăng kí tài khoản</h4>
					<div class="button1">
					   <a href="{!! url('/dangki') !!}"><input type="submit" name="Submit" value="Đăng kí"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				  <div class="login-title">
	           		<h4 class="title">Đăng nhập tài khoản</h4>
					 <div class="comments-area">
						<form method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<p>
								<label>Email</label>
								<span>*</span>
								<input type="text" value="" name = "email">
							</p>
							<p>
								<label>Mật khẩu</label>
								<span>*</span>
								<input type="password" value="" name="password">
							</p>
							 <p>
								<input type="submit" value="Đăng nhập">
							</p>
						</form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
        @include ('layoutbanhang.footer')
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