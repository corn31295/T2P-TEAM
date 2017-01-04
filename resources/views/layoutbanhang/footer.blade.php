<div class="footer">
	  <div class="footer-top">
		<div class="wrap">
			<div class="col_1_of_footer-top span_1_of_footer-top">
		  	<ul class="f_list">
		  	 	<li><span class="delivery">PHƯỚC (CHỦ SHOP) 01267436385</span></li>
		  	 </ul>
		   </div>
		   <div class="col_1_of_footer-top span_1_of_footer-top">
		  	<ul class="f_list">
		  	 	<li><span class="delivery">TÚ (QUẢN LÍ BÁN HÀNG) 0936654789</span></span></li>
		  	 </ul>
		   </div>
		   <div class="col_1_of_footer-top span_1_of_footer-top">
		  	<ul class="f_list">
		  	 	<li><span class="delivery">TÍN (PHỤ TÁ- THƯ KÍ) 01267854125</span></li>
		  	 </ul>
		   </div>
		  <div class="clear"></div>
	 </div>
	 </div>
	 <div class="footer-middle">
	 	<div class="wrap">
	 		<div class="section group">
		<div class="col_1_of_middle span_1_of_middle">
			<dl id="sample" class="dropdown">
	        
			    </dl>
			 </div>
		<div class="col_1_of_middle span_1_of_middle">
			<ul class="f_list1">
				<li><span class="m_8">Tìm kiếm</span>
				<div class="search">	  
					<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="Subscribe" id="submit" name="submit">
					<div id="response"> </div>
	 			</div><div class="clear"></div>
	 		    </li>
			</ul>
		</div>
		<div class="clear"></div>
	   </div>
	 	</div>
	 </div>
	 <div class="footer-bottom">
	 	<div class="wrap">
	 		<div class="section group">
 		<?php 
			$menu_cap_1 = DB::table('webbangiay_danh_muc')->where('parent_id', 0)->get();
		?>
		@foreach($menu_cap_1 as $item_cap_1)
		<div class="col_1_of_5 span_1_of_5">
			<h3 class="m_9">{!! $item_cap_1->name !!}</h3>
			<?php 
              	$menu_cap_2 = DB::table('webbangiay_danh_muc')->where('parent_id', $item_cap_1->id)->get();
            ?>
            @foreach($menu_cap_2 as $item_cap_2)
			<ul class="sub_list">
				<h4 class="m_10">{!! $item_cap_2->name !!}</h4>
				<?php 
                  	$menu_cap_3 = DB::table('webbangiay_danh_muc')->where('parent_id', $item_cap_2->id)->get();
                ?>
                @foreach($menu_cap_3 as $item_cap_3)
			    <li><a href="shop.html">{!! $item_cap_3->name !!}</a></li>
			    @endforeach
	        </ul>
	        @endforeach
		</div>
		
		</div>
		@endforeach
		<div class="clear"></div>
	</div>
	 	</div>
	 </div>
	 <div class="copy">
	   <div class="wrap">
	   	  <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
	   </div>
	 </div>
</div>