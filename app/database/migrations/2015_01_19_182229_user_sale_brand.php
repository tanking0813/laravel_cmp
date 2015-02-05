<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSaleBrand extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_sale_brand', function(Blueprint $table)
        {
            $table->increments('id');
			$table->string('title',200);//商标名称
			$table->mediumInteger('category_id'); //商标分类
			$table->integer('user_id');  //用户id
			$table->string('level',15)->nullable();  
			$table->decimal('price', 6, 2)->nullable(); //商标分类价钱

			$table->date('applicationdate')->comment('申请日期')->nullable(); // 商标注册日期

			$table->string('register_code',15)->comment('注册号')->nullable();//商标注册号
			$table->string('combine',10)->comment('组合类型');//商标组合类型
			$table->string('server_list',100)->comment('核定使用商品')->nullable();//核定使用商标  待定
			$table->string('register',30)->comment('注册人')->nullable(); //商标注册人
			$table->date('registration_date')->comment('注册日期')->nullable(); // 商标注册日期
			$table->date('announced_date')->comment('公告日期')->nullable();

			$table->string('validity_date',255)->comment('有效日期');
			$table->string('region_area',255)->comment('注册所在地');
			/*$table->date('validity_date')->comment('有效日期')->nullable(); //有效日期*/
			/*$table->mediumInteger('region_id')->comment('注册所在地');*/

			$table->string('trading',60)->comment('交易方式');
			$table->string('logo_status',30)->comment('商标状态')->nullable();
			$table->string('similar_group',30)->comment('类似群组')->nullable();
			$table->string('tags',100)->comment('标签')->nullable(); //标签

			$table->string('thumb',60);
			$table->string('spell',60)->comment('拼音')->nullable();
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
