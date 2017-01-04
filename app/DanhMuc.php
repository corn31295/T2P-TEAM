<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model {

	protected $table = 'webbangiay_danh_muc';

	protected $filltable = ['name', 'alias','order', 'parent_id', 'keywords', 'description'];

	//public $timestamps = false;

	public function sanpham()
	{
		return $this->hasMany('App\SanPham');
	}

}
