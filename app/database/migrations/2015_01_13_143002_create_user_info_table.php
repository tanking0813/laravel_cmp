<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('uid')->index()->unique();
			$table->string('truename')->nullable();
            $table->string('sex', 10)->nullable();
			$table->integer('phone')->nullable();
			$table->integer('tel')->nullable();
			$table->integer('zip_code')->nullable();
			$table->string('address')->nullable();
			$table->timestamp('birthday')->nullable();
			$table->string('blood_type', 10)->nullable();
			$table->string('native_place')->nullable();
			$table->string('income')->nullable();
			$table->string('religion')->nullable();
			$table->string('homepage')->nullable();
			$table->string('hobby')->nullable();
			//教育经历
			$table->string('edu_education')->nullable();
			$table->string('edu_school')->nullable();
			$table->string('edu_department')->nullable();
			$table->string('edu_time')->nullable();
			$table->string('edu_privacy')->nullable();
			//工作经验
			$table->string('company_name')->nullable();
			$table->string('company_department')->nullable();
			$table->string('company_time')->nullable();
			$table->string('company_position')->nullable();
			$table->string('company_privacy')->nullable();

			$table->string('description')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_info');
	}

}
