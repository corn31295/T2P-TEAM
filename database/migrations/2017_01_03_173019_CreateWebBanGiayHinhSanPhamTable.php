<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebBanGiayHinhSanPhamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webbangiay_hinhsanpham', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image');
			$table->integer('sanpham_id')->unsigned();
			$table->foreign('sanpham_id')->references('id')->on('san_phams')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webbangiay_hinhsanpham');
	}

}
