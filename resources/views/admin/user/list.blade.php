@extends('admin.master')
@section('controller', 'Thêm')
@section('action', 'Thành viên')
@section('content')
<div class="container-fluid">
    <div class="row">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>STT</th>
                    <th>Tên thành viên</th>
                    <th>Loại thành viên</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 0 ?>
                @foreach ($data as $item)
                <?php $stt = $stt + 1 ?>
                <tr class="odd gradeX" align="center">
                    <td>{!! $stt !!}</td>
                    <td>{!! $item["name"] !!}</td>
                    <td>
                        @if ($item["level"] == 1)
                            Quản trị viên cấp cao
                        @elseif ($item["level"] == 2)
                            Quản trị viên
                        @else
                            Thành viên
                        @endif

                    </td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn muốn xóa?')" href="{!! URL::route('admin.user.getDelete', $item['id']) !!}"> Xóa</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.user.getEdit', $item['id']) !!}">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
@endsection