<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_categories', function(Blueprint $table){
			$table->increments('id');
            $table->integer('pid')->default(0);
            $table->string('name');
            $table->string('slug');
            $table->string('thumb')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('level')->comment('0不推荐1推荐2推荐并首页推荐下显示');
            $table->integer('sorts')->default(100);
            $table->tinyInteger('status')->comment('1显示0不显示');
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
		Schema::drop('shop_categories');
	}

}
