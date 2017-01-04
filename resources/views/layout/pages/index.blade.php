@extends('layout.master')
@section('content')
<section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sản phẩm</span></h1>
      <ul class="thumbnails">
        @foreach($sanpham as $item)
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
@endsection