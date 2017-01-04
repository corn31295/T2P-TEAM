@extends('admin.master')
@section('controller', 'Thể loại')
@section('action', 'Chỉnh sửa')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.Error.error');
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
                    <label>Danh mục chính</label>
                    <select class="form-control" name ="sltParent">
                        <option value="0">Vui lòng chọn danh mục</option>
                        <?php danhmuc_parent($parent, 0, "", $data["parent_id"]); ?>
                     </select>
                </div>
                <div class="form-group">
                    <label>Tên thể loại</label>
                    <input class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên thể loại" value="{!! old('txtCateName', isset($data) ? $data['name'] : null) !!}" />
                </div>
                <div class="form-group">
                    <label>Thứ tự</label>
                    <input class="form-control" name="txtOrder" placeholder="Vui lòng nhập thứ tự" value="{!! old('txtOrder', isset($data) ? $data['order'] : null) !!}"/>
                </div>
                <div class="form-group">
                    <label>Từ khóa</label>
                    <input class="form-control" name="txtKeyWords" placeholder="Vui lòng nhập từ khóa" value="{!! old('txtKeyWords', isset($data) ? $data['keywords'] : null) !!}"/>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', isset($data) ? $data['description'] : null) !!}</textarea>
                </div>
                
                <button type="submit" class="btn btn-default">Thêm thể loại</button>
                <button type="reset" class="btn btn-default">Mặc định</button>
    <form>
</div>
@endsection