@extends('layout.master')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                    @foreach($sanpham_danhmuc as $item)
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
                  <div class="pagination pull-right">
                    <ul>
                      @if($sanpham_danhmuc->currentPage() !=1)
                      <li><a href="{!! str_replace('/?', '?', $sanpham_danhmuc->url($sanpham_danhmuc->currentPage() - 1)) !!}">Trước</a>
                      </li>
                      @endif
                      @for($i = 1; $i <= $sanpham_danhmuc->lastPage() ; $i++)
                      <li class="{!! ($sanpham_danhmuc->currentPage() == $i) ? 'active' : '' !!}">
                        <a href="{!! str_replace('/?', '?', $sanpham_danhmuc->url($i)) !!}">{!! $i !!}</a>
                      </li>
                      @endfor
                      @if($sanpham_danhmuc->currentPage() != $sanpham_danhmuc->lastPage())
                      <li><a href="{!! str_replace('/?', '?', $sanpham_danhmuc->url($sanpham_danhmuc->currentPage() + 1)) !!}">Sau</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
