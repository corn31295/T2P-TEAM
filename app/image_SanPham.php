<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class image_SanPham extends Model {

	protected $table = 'webbangiay_hinhsanpham';

	protected $filltable = ['image', 'sanpham_id'];

	//public $timestamps = false;

	public function sanpham()
	{
		return $this->belongTo('App\SanPham');
	}

}
