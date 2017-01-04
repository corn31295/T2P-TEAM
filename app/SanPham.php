<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model {

	protected $table = 'webbangiay_sanphamgiay';

	protected $filltable = ['name', 'alias','price','intro','content','image','keywords','description','user_id','danhmuc_id'];

	//public $timestamps = false;

	public function danhmuc()
	{
		return $this->belongsTo('App\DanhMuc');
	}
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function image_sanpham()
	{
		return $this->hasMany('App\image_SanPham', 'sanpham_id');
	}

}
