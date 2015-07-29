<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departments', function(Blueprint $table)
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
			$table->string('introduction', 256)->nullable();
			$table->boolean('enable', 1);
			$table->timestamps();
		});

		DB::unprepared('ALTER TABLE `departments` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `user_id` )');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departments');
	}

}
