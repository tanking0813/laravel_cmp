<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopCopyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_copy', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',200);
			$table->mediumInteger('category_id')->comment('著作权类别');
			$table->integer('user_id');
			$table->decimal('price', 6, 2);

			$table->string('author',100)->comment('作者')->nullable();
			$table->string('copyright',100)->comment('著作权人')->nullable();
			$table->date('copy_date')->comment('著作完成日期')->nullable();
			$table->tinyInteger('right_attribution')->comment('权利归属')->nullable();
			$table->tinyInteger('right_source')->comment('权利来源')->nullable();
			$table->tinyInteger('right_type')->comment('权利种类')->nullable();
			$table->string('trading',60)->comment('交易方式');
			$table->string('tags',100)->comment('标签')->nullable();

			$table->string('thumb',60);
			$table->string('spell',60)->comment('拼音')->nullable();
			$table->string('keywords',150)->nullable();			
			$table->string('introduce',460);
			$table->text('content');
			$table->tinyInteger('num')->default(1);
			$table->mediumInteger('hits')->default(0);
			$table->smallInteger('orders_num')->comment('订单数')->default(0);
			$table->smallInteger('collect_num')->comment('收藏数')->default(0);
			$table->smallInteger('praise_num')->comment('点赞数')->default(0);
			$table->mediumInteger('comments')->default(0);
			$table->integer('sorts')->default(100);
			$table->boolean('popularity')->default(0)->comment('人气');
			$table->boolean('flash_sale')->default(0)->comment('限时抢');
			$table->boolean('fixedprice')->default(0)->comment('一口价');
			$table->boolean('recomment')->default(0)->comment('推荐');
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
		Schema::drop('shop_copy');
	}

}
