@extends('admin.master')
@section('controller', 'Danh sách')
@section('action', 'Sản phẩm')
@section('content')
<div class="container-fluid">
    <div class="row">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Ngày</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 0 ?>
                @foreach($data as $item)
                <?php $stt = $stt + 1 ?>
                <tr class="odd gradeX" align="center">
                    <td>{!! $stt !!}</td>
                    <td>{!! $item["name"]!!}</td>
                    <td>
                        <?php $danhmuc = DB::table('webbangiay_danh_muc')->where('id', $item["danhmuc_id"])->first(); ?>
                        @if (!empty($danhmuc->name))
                            {!! $danhmuc->name !!}
                        @endif

                    </td>
                    <td>{!! number_format($item["price"], 0, ",", ".")!!} VNĐ</td>
                    <td><?php 
                        echo \Carbon\carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans()
                    ?></td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick = "return xacnhanxoa('Bạn muốn xóa?')" href="{!! URL::route('admin.sanpham.getDelete', $item['id']) !!}"> Xóa</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.sanpham.getEdit', $item['id']) !!}">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
@endsection
            