<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\DanhmucRequest;
use App\DanhMuc;

class DanhmucController extends Controller {

	public function getList()
	{
		$data = DanhMuc::select('id', 'name', 'parent_id')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.danhmuc.list', compact('data'));
	}
	public function getAdd()
	{
		$parent = DanhMuc::select('id', 'name', 'parent_id')->get()->toArray();
		return view('admin.danhmuc.add', compact('parent'));
	}
	public function postAdd(DanhmucRequest $request)
	{
		$danhmuc = new DanhMuc;
		$danhmuc->name = $request->txtCateName;
		$danhmuc->alias = changeTitle($request->txtCateName);
		$danhmuc->order = $request->txtOrder;
		$danhmuc->parent_id = $request->sltParent;
		$danhmuc->keywords = $request->txtKeyWords;
		$danhmuc->description = $request->txtDescription;
		$danhmuc->save();
		return redirect()->route('admin.danhmuc.getList')->with(['flash_level'=>'success', 'flash_message'=>'Thành công!']);
	}
	public function getDelete($id)
	{
		$parent = DanhMuc::where('parent_id', $id)->count();// đếm số lượng thể loại con của id
		if($parent ==0)// nếu thể loại không có cha thì xóa
		{
			$danhmuc = DanhMuc::find($id);
			$danhmuc->delete();
			return redirect()->route('admin.danhmuc.getList')->with(['flash_level'=>'success', 'flash_message' =>'Xóa thành công!']);
		}
		else // ngược lại thể loại là thể loại cha thì không xóa
		{
			echo "<script type='text/javascript'> alert('Bạn không thể xóa thư mục cha');
				window.location ='";
					echo route('admin.danhmuc.getList');
				echo"'
			</script>";

		}
		
	}
	public function getEdit($id)
	{
		$data = DanhMuc::findOrFail($id)->toArray();
		$parent = DanhMuc::select('id', 'name', 'parent_id')->get()->toArray();
		return view('admin.danhmuc.edit', compact('parent', 'data', 'id'));
	}
	public function postEdit(Request $request, $id)
	{
		$this->validate($request,
			["txtCateName"=>"required"],
			["txtCateName.required"=>"Vui lòng nhập tên"]
			);
		$danhmuc = DanhMuc::find($id);
		$danhmuc->name = $request->txtCateName;
		$danhmuc->alias = changeTitle($request->txtCateName);
		$danhmuc->order = $request->txtOrder;
		$danhmuc->parent_id = $request->sltParent;
		$danhmuc->keywords = $request->txtKeyWords;
		$danhmuc->description = $request->txtDescription;
		$danhmuc->save();
		return redirect()->route('admin.danhmuc.getList')->with(['flash_level'=>'success', 'flash_message'=>'Chỉnh sửa thành công!']);
	}

}
