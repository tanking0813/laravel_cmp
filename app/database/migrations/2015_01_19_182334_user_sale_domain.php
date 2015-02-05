<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSaleDomain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_sale_domain', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',200);
			$table->mediumInteger('category_id');
			$table->integer('user_id');
			$table->string('level',15);
			$table->decimal('price', 6, 2);

			$table->string("domain",255)->comment('域名');
			$table->string("domainsuffix",50)->comment('域名后缀');
			$table->date('register_date')->comment('有效日期')->nullable();
			$table->string('validity_date')->comment('有效日期')->nullable();
			$table->string('sex_domain')->comment('域名后缀值');
			$table->string('trading',60)->comment('交易方式');

			$table->string('thumb',60);
			$table->string('spell',60)->comment('拼音')->nullable();
			$table->string('keywords',150)->nullable();			
			$table->string('introduce',460);
			$table->text('content');
			$table->tinyInteger('num');
			$table->mediumInteger('hits')->default(0);
			$table->smallInteger('orders_num')->comment('订单数')->default(0);
			$table->mediumInteger('comments')->default(0);
			$table->integer('sorts')->default(0);
            $table->tinyInteger('status')->default(1)->comment('1已审核2未审核3未审核通过');
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
		//
	}

}
