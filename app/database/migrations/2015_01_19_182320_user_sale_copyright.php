<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSaleCopyright extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_sale_copyright', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',200);
			$table->mediumInteger('category_id');
			$table->integer('user_id');
			$table->string('level',15);
			$table->decimal('price', 6, 2);
			
			$table->string("author",64)->comment('作者');
			$table->string("authoraddress",255)->comment('作者联系地址');
			$table->string("patenter",255)->comment('版权树与人');
			$table->string("email",255)->comment('邮箱');
			$table->string("belongto",60)->comment("版权属于");
			$table->string("from",60)->comment('版权来源');
			$table->string("kind",60)->comment('版权种类');
			
			$table->string('register_code',15)->comment('注册号')->nullable();
			$table->string('register',30)->comment('注册人')->nullable();
			$table->date('registration_date')->comment('注册日期')->nullable();
			$table->date('announced_date')->comment('公告日期')->nullable();
			$table->date('validity_date')->comment('有效日期')->nullable();
			$table->mediumInteger('region_id')->comment('注册所在地');
			$table->string('trading',60)->comment('交易方式');
			$table->string('tags',100)->comment('标签')->nullable();

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
