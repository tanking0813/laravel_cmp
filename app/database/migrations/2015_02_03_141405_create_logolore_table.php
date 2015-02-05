<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoloreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logo_lore', function(Blueprint $table)
		{
			$table->increments('id');			 
		    $table->string('title', 60);
		    $table->string('source', 20);
            $table->text('content', 2000);            
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
		Schema::drop('logo_lore');
	}

}
