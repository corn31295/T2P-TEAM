<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SanphamRequest extends Request {

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
			'sltParent'	=>'required',
			'txtName'	=>'required|unique:webbangiay_sanphamgiay,name',
			'fImages'	=>'required|image',
			'fHinhAnh[]'	=> 'image'
		];
	}
	public function messages()
	{
		return [
			'sltParent.required'	=> 'Vui lòng chọn danh mục',
			'txtName.required'	=>	'Vui lòng nhập tên sản phẩm!',
			'txtName.unique'	=>	'Trùng tên, vui lòng nhập lại!',
			'fImages.required' => 'Vui lòng chọn hình ảnh',
			'fImages.image' => 'Không phải là file hình ảnh',
			'fHinhAnh[].image'	=> 'Không phải là file hình ảnh'

		];
	}

}
