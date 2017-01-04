@extends('admin.master')
@section('controller', 'Thêm')
@section('action', 'Sản phẩm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.Error.error')
            <form action="{!! url('/admin/sanpham/add') !!}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <label>Danh mục chính</label>
                    <select class="form-control" name ="sltParent">
                        <option value="">Vui lòng chọn danh mục</option>
                        <?php danhmuc_parent($danhmuc, 0, "", old('sltParent')); ?>
                     </select>
                </div>
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input class="form-control" name="txtName" placeholder="Vui lòng nhập tên sản phẩm" value="{!! old('txtName')!!}" />
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input class="form-control" name="txtPrice" placeholder="Vui lòng nhập giá sản phẩm" value="{!! old('txtPrice')!!}"/>
                </div>
                <div class="form-group">
                    <label>Giới thiệu</label>
                    <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro')!!}</textarea>
                    <script type="text/javascript">ckeditor("txtIntro")</script>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent')!!}</textarea>
                    <script type="text/javascript">ckeditor("txtContent")</script>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="fImages" value="{!! old('fImages')!!}">
                </div>
                <div class="form-group">
                    <label>Từ khóa sản phẩm</label>
                    <input class="form-control" name="txtKeywords" placeholder="Vui lòng nhập từ khóa sản phẩm" value="{!! old('txtKeywords')!!}"/>
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription')!!}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                <button type="reset" class="btn btn-default">Mặc định</button>
            
    <!-- /.row -->
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
    @for ($i = 1;$i<=10;$i++)
    <div class="form-group">
        <label>Hình ảnh {!! $i !!}</label>
        <input type="file" name="fHinhAnh[]"/>
    </div>
    @endfor
</div>
</form>
@endsection