<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopPatentOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_patent_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_code',20);
			$table->integer('user_id');
			$table->integer('patent_id');
			$table->string('patent_title',200);
			$table->string('patent_thumb',60);
			$table->tinyInteger('num')->comment('购买数');	
			$table->string('remark',300)->comment('备注');
			$table->integer('address_id');
			$table->string('buyer_name',60);
			$table->string('buyer_address',200);
			$table->string('buyer_postcode',10)->comment('邮编');
			$table->string('phone',15);
			$table->string('tel',15);
			$table->tinyInteger('trade_type')->comment('交易类型');
			$table->decimal('amount');
			$table->decimal('real_price');
			$table->integer('expense_integral')->comment('消费积分');
			$table->integer('shipping_fee')->comment('运费');
			$table->tinyInteger('status')->comment('交易状态1提交2付款3发货4等待收货5已确认6退货7退货成功');
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
		Schema::drop('shop_patent_orders');
	}

}
