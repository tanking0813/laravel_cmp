<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopCartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_carts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->tinyInteger('shop_cat');
			$table->integer('goods_id');
			$table->tinyInteger('goods_num');
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
		Schema::drop('shop_carts');
	}

}
