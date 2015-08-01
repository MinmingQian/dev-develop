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
			$table->integer('apartment_id');
			$table->string('name', 32);
			$table->string('orientation',32);
			$table->integer('size')->default(0);
			$table->boolean('air_condition',1);
			$table->boolean('tv',1);
			$table->boolean('toilet',1);
			$table->boolean('kitchen',1);
			$table->string('room_pic', 128)->nullable();
			$table->integer('price');
			$table->integer('deposit');
			$table->integer('min_rent_time')->default(0);
			$table->boolean('enable', 1);
			$table->timestamps();

		});

		DB::unprepared('ALTER TABLE `rooms` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `apartment_id` )');
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
