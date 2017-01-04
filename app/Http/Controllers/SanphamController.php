<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\DanhMuc;
use App\SanPham;
use App\image_SanPham;
use App\Http\Requests\SanphamRequest;
use Input, File, Auth;

class SanphamController extends Controller {

	public function getList()
	{
		$data = SanPham::select('id', 'name', 'price','danhmuc_id', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.sanpham.list', compact('data'));
	}
	public function getAdd()
	{
		$danhmuc = DanhMuc::select('name', 'id', 'parent_id')->get()->toArray();
		return view('admin.sanpham.add', compact('danhmuc'));
	}
	public function postAdd(SanphamRequest $sanphamrequest)
	{
		$file_name = $sanphamrequest->file('fImages')->getClientOriginalName();
		$sanpham = new SanPham();
		$sanpham->name = $sanphamrequest->txtName;
		$sanpham->alias = changeTitle($sanphamrequest->txtName);
		$sanpham->price = $sanphamrequest->txtPrice;
		$sanpham->intro = $sanphamrequest->txtIntro;
		$sanpham->content = $sanphamrequest->txtContent;
		$sanpham->image = $file_name;
		$sanpham->keywords = $sanphamrequest->txtKeywords;
		$sanpham->description = $sanphamrequest->txtDescription;
		$sanpham->user_id = Auth::user()->id;
		$sanpham->danhmuc_id = $sanphamrequest->sltParent;
		$sanphamrequest->file('fImages')->move('resources/upload/', $file_name);
		$sanpham->save();
		$sanpham_id = $sanpham->id;
		if(Input::hasFile('fHinhAnh'))
		{
			foreach (Input::file('fHinhAnh') as $file) {
				$sanpham_image = new image_SanPham();
				if(isset($file))
				{
					$sanpham_image->image = $file->getClientOriginalName();
					$sanpham_image->sanpham_id = $sanpham_id;
					$file->move('resources/upload/', $file->getClientOriginalName());
					$sanpham_image->save();
				}
			}
		}
		return redirect()->route('admin.sanpham.getList')->with(['flash_level'=>'success', 'flash_message'=>'Thành công!']);
	}
	public function getDelete($id)
	{
		$img_sanpham = SanPham::find($id)->image_sanpham->toArray();

		foreach($img_sanpham as $value)
		{
			File::delete('resources/upload/'.$value["image"]);
		}
		$sanpham = SanPham::find($id);
		File::delete('resources/upload/'.$sanpham->image);
		$sanpham->delete($id);
		return redirect()->route('admin.sanpham.getList')->with(['flash_level'=>'success', 'flash_message'=>'Xóa thành công!']);
	}
	public function getEdit($id)
	{
		$danhmuc = DanhMuc::select('id', 'name', 'parent_id')->get()->toArray();
		$sanpham = SanPham::find($id);
		$hinhanh_sanpham = SanPham::find($id)->image_sanpham;
		return view('admin.sanpham.edit', compact('danhmuc', 'sanpham','hinhanh_sanpham'));
	}
	public function postEdit($id, Request $request)
	{
		$sanpham = SanPham::find($id);
		$sanpham->name =  $request->txtName;
		$sanpham->alias = changeTitle($request->txtName);
		$sanpham->price = $request->txtPrice;
		$sanpham->intro = $request->txtIntro;
		$sanpham->content = $request->txtContent;
		$sanpham->keywords = $request->txtKeywords;
		$sanpham->description = $request->txtDescription;
		$sanpham->user_id = Auth::user()->id;
		$sanpham->danhmuc_id = $request->sltParent;
		$sanpham->save();
		return redirect()->route('admin.sanpham.getList')->with(['flash_level'=>'success', 'flash_message'=>'Sửa thành công!']);

	}

}
