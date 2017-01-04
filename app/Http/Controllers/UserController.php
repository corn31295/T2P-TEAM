<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash, Auth;

class UserController extends Controller {

	public function getList()
	{
		$data = User::select('id','name','level')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.user.list', compact('data'));
	}
	public function getAdd()
	{
		return view('admin.user.add');
	}

	public function postAdd(UserRequest $request)
	{
		$user = new User();
		$user->name = $request->txtUser;
		$user->password = Hash::make($request->txtPass);
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success', 'flash_message'=>'Thành công!']);
	}

	public function getDelete($id)
	{
		$user_login = Auth::user()->id;
		$user = User::find($id);
		if(($id == 1)||($user_login !=1 && $user["level"] == 1))
		{
			return redirect()->route('admin.user.getList')->with(['flash_level'=>'danger', 'flash_message'=>'Không được xóa!']);
		}
		else
		{
			$user->delete($id);
			return redirect()->route('admin.user.getList')->with(['flash_level'=>'success', 'flash_message'=>'Xóa thành công!']);
		}
	}

	public function getEdit($id)
	{
		$data = User::find($id);
		return view('admin.user.edit', compact('data'));
	}

	public function postEdit($id, Request $request)
	{
		$user = User::find($id);
		$user->name = $request->txtUser;
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success', 'flash_message'=>'Sửa thành công!']);
	}


}
