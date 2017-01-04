<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\DanhMuc;
use App\SanPham;
use App\image_SanPham;
use App\Http\Requests\SanphamRequest;
use Input, File, Auth;
class CommentController extends Controllers
{
	//
	

	public function postComment($id, Request $request)
	{
		$idTinTuc =$id;
		$sanpham = SanPham::find($id);
		$comment = new Comment;
		$comment -> idTinTuc = $idTinTuc
		$comment->IdUser = Auth::user()->id;
		$comment->NoiDung = $request->NoiDung;
		$comment->save;

		return view('chi-tiet-san-pham', [$item->id, $item->alias]);
	}
}
