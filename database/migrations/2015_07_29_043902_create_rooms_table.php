<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id', true);
			$table->integer('department_id');
			$table->string('room_name', 16);
			$table->char('air_condition');
			$table->char('tv');
			$table->char('toilet');
			$table->char('kitchen')->nullable()->default(0);
			$table->string('room_pic', 128)->nullable();
			$table->integer('price');
			$table->integer('deposit');
			$table->integer('min_rent_time')->default(0);
			$table->boolean('enable', 1);
			$table->timestamps();

		});

		DB::unprepared('ALTER TABLE `rooms` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `department_id` )');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}
