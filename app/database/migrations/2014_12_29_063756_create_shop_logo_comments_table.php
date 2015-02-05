<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopLogoCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_logo_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('logo_id');
			$table->integer('user_id');
			$table->integer('parent_id')->default(0)->comment('回复的评论ID');	
			$table->string('content',450);
			$table->string('reply_content',450)->nullable();
			$table->integer('reply_user')->nullable();
			$table->timestamp('reply_time')->nullable();
			$table->tinyInteger('status')->default(0);
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
		Schema::drop('shop_logo_comments');
	}

}
