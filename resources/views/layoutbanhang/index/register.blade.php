<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Web bán giày</title>
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
<script src="{{ url('public/admin/dist/js/myScript.js')}}"></script>
</head>
<body>
  	@include ('layoutbanhang.header')
       <div class="register_account">

          	<div class="wrap">
    	      <h4 class="title">Tạo tài khoản</h4>
    	      @include('admin.Error.error')
            <div>
             @if (Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
            </div>            
    		   <form method="POST">
    		   		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	    			<div class="col_1_of_2 span_1_of_2">
			   			 	<div><input type="text" value="Tên" name="txtUser" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên';}"></div>
			    			<div><input type="text" value="Email" name="txtEmail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></div>
			    			<div><input type="text" value="Mật khẩu" name="txtPass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}"></div>
			    			<div><input type="text" value="Nhập lại mật khẩu" name="txtRePass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập lại mật khẩu';}"></div>
			    		<button class="grey">Đăng kí</button>
			    	</div>
		         <div class="clear"></div>
		    </form>
    	  </div> 
        </div>
        @include ('layoutbanhang.footer')
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