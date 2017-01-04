@extends('admin.master')
@section('controller', 'Danh sách')
@section('action', 'thể loại')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên thể loại</th>
            <th>Thể loại chính</th>
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
                @if ($item["parent_id"] == 0)
                    {!! "None" !!}
                @else
                    <?php 
                    $parent = DB::table('webbangiay_danh_muc')->where('id', $item["parent_id"])->first();
                    echo $parent->name;
                ?>
                @endif
                
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn muốn xóa?')" href="{!! URL::route('admin.danhmuc.getDelete', $item['id']) !!}"> Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.danhmuc.getEdit', $item['id']) !!}">Sửa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection()
        