@extends('admin.master')
@section('controller', 'Chỉnh sửa')
@section('action', 'Sản phẩm')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST">
        @include('admin.Error.error')
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Tên thành viên</label>
            <input class="form-control" name="txtUser" value="{!! old('txtName'), isset($data) ? $data['name'] : null !!}"/>
        </div>
        <!--<div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" value="{!! old('txtPass'), isset($data) ? $data['password'] : null !!}"/>
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" value="{!! old('txtRePass'), isset($data) ? $data['password'] : null !!}"/>
        </div>-->
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" value="{!! old('txtEmail'), isset($data) ? $data['email'] : null !!}"/>
        </div>
        <div class="form-group">
            <label>Loại thành viên</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" checked="" type="radio">Quản trị viên
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="3" type="radio">Thành viên
            </label>
        </div>
        <button type="submit" class="btn btn-default">Sửa thông tin</button>
        <button type="reset" class="btn btn-default">Mặc định</button>
    <form>
</div>
@endsection
                