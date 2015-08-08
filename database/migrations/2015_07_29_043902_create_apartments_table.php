<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apartments', function(Blueprint $table)
		{
			$table->increments('id', true);
			$table->integer('user_id')->default(0);
			$table->string('name',128);
			$table->integer('size');
			$table->string('address', 196);
			$table->string('description', 256);
			$table->integer('level')->default(1);
			$table->float('location_x', 10, 0)->default(0);
			$table->float('location_y', 10, 0)->default(0);
			$table->integer('min_rent_time')->default(0);
			$table->integer('deposit')->default(0);
			$table->integer('price')->default(0);
			$table->double('discount')->default(9);
			$table->string('introduction', 1024)->nullable();
			$table->boolean('enable', 0);
			$table->rented('enable', 0);
			$table->string('pic', 128)->nullable();
			$table->timestamps();
		});

		DB::unprepared('ALTER TABLE `apartments` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `user_id` )');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apartments');
	}

}
