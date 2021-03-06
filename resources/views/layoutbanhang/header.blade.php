<div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="{!! url('/') !!}"><img src="{!! url('public/layoutbanhang/images/t2plogo.png') !!}" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
		   	@if(!isset($nguoidung))
			   	<li><a href="{!! url('/dangki') !!}">Đăng kí</a></li>
				<li><a href="{!! url('/dangnhap') !!}">Đăng nhập</a></li>
		   	@else
		   		<li>
                      <a><h3>{{$nguoidung->name}}</h3></a>
                    </li>
		   		<li><a href="{{ url('/auth/logout') }}">Đăng xuất</a></li>  
		   	@endif
			
		   </ul>
		</div>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color1" href="{!! url('/') !!}">Trang chủ</a></li>
		    <?php 
				$menu_cap_1 = DB::table('webbangiay_danh_muc')->where('parent_id', 0)->get();
			?>
			@foreach($menu_cap_1 as $item_cap_1)
			<li class="grid"><a class="color2" href="#">{!! $item_cap_1->name !!}</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<?php 
				                  	$menu_cap_2 = DB::table('webbangiay_danh_muc')->where('parent_id', $item_cap_1->id)->get();
				                ?>
					            @foreach($menu_cap_2 as $item_cap_2)
								<h4>{!! $item_cap_2->name !!}</h4>

								<ul>
									<?php 
					                  	$menu_cap_3 = DB::table('webbangiay_danh_muc')->where('parent_id', $item_cap_2->id)->get();
					                ?>
					                @foreach($menu_cap_3 as $item_cap_3)
									<li><a href="{!! URL('loai-san-pham', [$item_cap_3->id, $item_cap_3->alias]) !!}">{!! $item_cap_3->name !!}</a></li>
									@endforeach
									
								</ul>	
								@endforeach
							</div>
							
						</div>
						
						
					
						
					</div>
				</div>
			</li>
			@endforeach

			<li><a class="color1" href="{!! url('/') !!}">Giỏ Hàng</a></li>
			<li><a class="color1" href="{!! url('/') !!}">Liên Hệ</a></li>
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>