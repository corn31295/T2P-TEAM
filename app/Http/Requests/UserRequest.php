<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtUser'	=> 'required|unique:users,name',
			'txtPass'	=>	'required',
			'txtRePass'	=>	'required|same:txtPass',
			'txtEmail'	=>	'required|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/'
		];
	}
	public function messages()
	{
		return [
			'txtUser.required'	=>	'Vui lòng nhập tên',
			'txtUser.unique'	=>	'Tên đăng nhập tồn tại',
			'txtPass.required'	=>	'Vui lòng nhập mật khẩu',
			'txtRePass.required'	=>	'Vui lòng nhập lại mật khẩu',
			'txtRePass.same'	=>	'Vui lòng nhập đúng mật khẩu',
			'txtEmail.required'	=>	'Vui lòng nhập email',
			'txtEmail.regex'	=>	'Vui lòng nhập đúng định dạng email'
		];
	}

}
