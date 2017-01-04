@extends('layoutbanhang.master')
@section('content')
<div class="main">
    <div class="wrap">
 	  	<div class="content-top">
	 		
		<div class="cont span_2_of_c1">
		  	
			<div class="clear"> </div>
		</div>
		<div class="clear"></div>			
	</div>
	<div class="content-bottom">
		<div class="box1">
		    @foreach($sanpham as $item)
		    <div class="col_1_of_3 span_1_of_3"><a href="{!! url('chi-tiet-san-pham', [$item->id, $item->alias]) !!}">
		     	<div class="view view-fifth">
		  	  	<div class="top_box">
			  	<h3 class="m_1">{!! $item->name !!}</h3>
		        <div class="grid_img">
				   	<div class="css3"><img src="{!! asset('resources/upload/'.$item->image) !!}" alt=""/></div>
			          <div class="mask">
                   		<div class="info">Xem thêm</div>
	                </div>
                </div>
               	<div class="price">{!! number_format($item->price,0,",",".") !!}</div>
			   	</div>
				
	    	    <div class="clear"></div>
	    	</a></div>
	    	@endforeach
		  <div class="clear"></div>
	  </div> 
	  <div class="box1">
	  		@foreach($sanpham2 as $item)
			<div class="col_1_of_3 span_1_of_3"><a href="{!! url('chi-tiet-san-pham', [$item->id, $item->alias]) !!}">
			     <div class="view view-fifth">
			  	  <div class="top_box">
				  	<h3 class="m_1">{!! $item->name !!}</h3>
			         <div class="grid_img">
					   <div class="css3"><img src="{!! asset('resources/upload/'.$item->image) !!}" alt=""/></div>
				          <div class="mask">
	                   		<div class="info">Xem thêm</div>
		                  </div>
	                </div>
	               <div class="price">{!! number_format($item->price,0,",",".") !!}</div>
				   </div>
				    </div>
				   <span class="rating">
			        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
			        <label for="rating-input-1-5" class="rating-star1"></label>
			        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
			        <label for="rating-input-1-4" class="rating-star1"></label>
			        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
			        <label for="rating-input-1-3" class="rating-star1"></label>
			        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
			        <label for="rating-input-1-2" class="rating-star"></label>
			        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
			        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
	        	  (45)
	    	      </span>
					 <ul class="list">
					  <li>
					  	<img src="{!! 'public/layoutbanhang/images/plus.png' !!}" alt=""/>
					  	<ul class="icon1 sub-icon1 profile_img">
						  <li><a class="active-icon c1" href="#">Thêm vào giỏ hàng </a>
							<ul class="sub-icon1 list">
								<li><h3>sed diam nonummy</h3><a href=""></a></li>
								<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
							</ul>
						  </li>
						 </ul>
					   </li>
				     </ul>
		    	    <div class="clear"></div>
		    	</a></div>
		    @endforeach
			<div class="clear"></div>
			
	    </div>
	  </div>
	</div>
</div>
@endsection