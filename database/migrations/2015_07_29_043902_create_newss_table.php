<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewssTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('newss', function(Blueprint $table)
		{
			$table->increments('id', true);
			$table->integer('news_type_id');
			$table->string('title', 32);
			$table->text('content', 65535);
			$table->dateTime('time');
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
		Schema::drop('newss');
	}

}
