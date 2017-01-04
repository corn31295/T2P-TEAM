@extends('admin.master')
@section('controller', 'Thêm')
@section('action', 'Thành viên')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.Error.error')
            <form action="{!! url('/admin/user/add') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <label>Tên thành viên</label>
                    <input class="form-control" name="txtUser" placeholder="Vui lòng nhập tên" value ="{!! old('txtUser') !!}"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="txtEmail" placeholder="Vui lòng nhập Email" value ="{!! old('txtEmail') !!}"/>
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" name="txtPass" placeholder="Vui lòng nhập mật khẩu" value ="{!! old('txtPass') !!}"/>
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="txtRePass" placeholder="Vui lòng nhập lại mật khẩu" value ="{!! old('txtRePass') !!}"/>
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
                <button type="submit" class="btn btn-default">Thêm thành viên</button>
                <button type="reset" class="btn btn-default">Đặt lại</button>
            <form>
        </div>
    </div>
</div>
@endsection