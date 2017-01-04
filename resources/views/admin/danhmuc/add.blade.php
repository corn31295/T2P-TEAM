@extends('admin.master')
@section('controller', 'Thể loại')
@section('action', 'thêm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.Error.error')

            <form action="{!! route('admin.danhmuc.getAdd') !!}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <label>Danh mục chính</label>
                    <select class="form-control" name ="sltParent">
                        <option value="0">Vui lòng chọn danh mục</option>
                        <?php danhmuc_parent($parent); ?>
                     </select>
                </div>
                <div class="form-group">
                    <label>Tên thể loại</label>
                    <input class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên thể loại" />
                </div>
                <div class="form-group">
                    <label>Thứ tự</label>
                    <input class="form-control" name="txtOrder" placeholder="Vui lòng nhập thứ tự" />
                </div>
                <div class="form-group">
                    <label>Từ khóa</label>
                    <input class="form-control" name="txtKeyWords" placeholder="Vui lòng nhập từ khóa" />
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="3" name="txtDescription"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Thêm thể loại</button>
                <button type="reset" class="btn btn-default">Mặc định</button>
            <form>
        </div>
    </div>
</div>
@endsection()