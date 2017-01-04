@extends('admin.master')
@section('controller', 'Chỉnh sửa')
@section('action', 'Sản phẩm')
@section('content')
<style>
    .image_hinhconsp {width: 200px;margin-bottom: 20px;margin-top: 20px;}
    .icon_del {position: relative;top:-120px;left:-30px;}
</style>
<form action="" method="POST" enctype="multipart/form-data">
<div class="container-fluid">
    <div class="row">
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.Error.error')
            
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <label>Danh mục chính</label>
                    <select class="form-control" name ="sltParent">
                        <option value="">Vui lòng chọn danh mục</option>
                        <?php danhmuc_parent($danhmuc, 0, "", $sanpham["danhmuc_id"]); ?>
                     </select>
                </div>
            <form action="" method="POST">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input class="form-control" name="txtName" placeholder="Vui lòng nhập tên sản phẩm" value="{!! old('txtName'), isset($sanpham) ? $sanpham['name'] : null !!}" />
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input class="form-control" name="txtPrice" placeholder="Vui lòng nhập giá sản phẩm" value="{!! old('txtPrice'), isset($sanpham) ? $sanpham['price'] : null!!}"/>
                </div>
                <div class="form-group">
                    <label>Giới thiệu</label>
                    <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro'), isset($sanpham) ? $sanpham['intro'] : null!!}</textarea>
                    <script type="text/javascript">ckeditor("txtIntro")</script>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent'), isset($sanpham) ? $sanpham['content'] : null!!}</textarea>
                    <script type="text/javascript">ckeditor("txtContent")</script>
                </div>
                <div class="form-group">
                    <label>Hình hiện tại</label>
                    <img src = "{!! asset('resources/upload/'.$sanpham['image']) !!}" width = "150px" />
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="fImages">
                </div>
                <div class="form-group">
                    <label>Từ khóa sản phẩm</label>
                    <input class="form-control" name="txtKeywords" placeholder="Vui lòng nhập từ khóa sản phẩm" value="{!! old('txtKeywords'), isset($sanpham) ? $sanpham['keywords'] : null!!}"/>
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription'), isset($sanpham) ? $sanpham['description'] : null!!}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa sản phẩm</button>
                <button type="reset" class="btn btn-default">Mặc định</button>
            

    <!-- /.row -->
</div>
<div class = "col-md-1"></div>
<div class = "col-md-4">
    @for ($i = 1;$i<=10;$i++)
    <div class="form-group">
        <label>Hình ảnh {!! $i !!}</label>
        <input type="file" name="fHinhAnh[]"/>
    </div>
    @endfor
    @foreach ($hinhanh_sanpham as $key => $item)
        <div class = "form-group" id="hinh{!! $key !!}">
            <!--Load tất cả hình của sản phẩm-->
            <img src = "{!! asset('resources/upload/'.$item['image']) !!}" class="image_hinhconsp" id="hinh{!! $key !!}"/>
            <!--Hiển thị nút xóa hình-->
            <a id = "del_img_demo" class = "btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
            <input type="file" name="fHinhAnh[]"/>
            
        </div>
    @endforeach
    <!--<button type="button" class ="btn btn-primary" id="themHinhanh" margin-top = "20px">Thêm hình ảnh</button>-->
</div>

</form>
@endsection

            