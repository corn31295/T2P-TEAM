<?php namespace App\Http\Controllers;
use DB, Cart;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\LoginRequest;
use Auth, Hash;
use App\Http\Requests\UserRequest;
use App\User;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
		if(Auth::check())
		{
			view()->share('nguoidung', Auth::user());
		}
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sanpham = DB::table('webbangiay_sanphamgiay')->select('id', 'name', 'image', 'price', 'alias', 'danhmuc_id')->orderBy('id', 'DESC')->skip(0)->take(3)->get();
		$sanpham2 = DB::table('webbangiay_sanphamgiay')->select('id', 'name', 'image', 'price', 'alias', 'danhmuc_id')->orderBy('id', 'DESC')->skip(3)->take(6)->get();
		return view('layoutbanhang.index.index', compact('sanpham', 'sanpham2'));
	}
	public function loaisanpham($id)
	{
		$sanpham_danhmuc = DB::table('webbangiay_sanphamgiay')->select('id', 'name', 'image', 'price', 'alias', 'danhmuc_id')->where('danhmuc_id', $id)->paginate(6);
		//$danhmuc = DB::table('danh_mucs')->select('parent_id')->where('id', $sanpham_danhmuc[0]->danhmuc_id)->get();
		return view('layoutbanhang.index.shop', compact('sanpham_danhmuc'));
	}
	public function chitietsanpham($id)
	{
		$chitiet_sanpham = DB::table('webbangiay_sanphamgiay')->where('id', $id)->first();
		$image = DB::table('webbangiay_hinhsanpham')->select('id', 'image')->where('sanpham_id', $chitiet_sanpham->id)->get();
		$sanpham_lienquan = DB::table('webbangiay_sanphamgiay')->where('danhmuc_id', $chitiet_sanpham->danhmuc_id)->where('id', '<>', $id)->take(4)->get();
		return view('layoutbanhang.index.single', compact('chitiet_sanpham', 'image', 'sanpham_lienquan'));
	}
	public function muahang($id)
	{
		$muahang = DB::table('webbangiay_sanphamgiay')->where('id', $id)->first();
		Cart::add(array('id'=>$id, 'name'=>$muahang->name, 'qty'=>1, 'price'=>$muahang->price, 'options'=>array('img'=>$muahang->image)));
		$content = Cart::content();
		return redirect()->route('giohang');
	}
	public function giohang()
	{
		$content = Cart::content();
		$tongtien = Cart::total();
		return view('layoutbanhang.index.checkout', compact('content', 'tongtien'));
	}
	public function xoasanpham($id)
	{
		Cart::remove($id);
		return redirect()->route('giohang');
	}
	public function getDangnhap()
	{
		return View('layoutbanhang.index.login');
	}
	public function postDangnhap(LoginRequest $request)
	{
		$login = array(
			'email'	=> $request->email,
			'password'	=> $request->password,
			'level'	=>	3
		);
		if(Auth::attempt($login))
		{
			return redirect('/');
		}
		else
		{
			return redirect()->back();
		}
	}
	public function getDangki()
	{
		return View('layoutbanhang.index.register');
	}
	public function postDangki(UserRequest $request)
	{
		$user = new User();
		$user->name = $request->txtUser;
		$user->password = Hash::make($request->txtPass);
		$user->email = $request->txtEmail;
		$user->level = 3;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('dangki')->with(['flash_level'=>'success', 'flash_message'=>'Thành công!']);
	}

}
