<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id', true);
			$table->integer('buyer_id');
			$table->integer('seller_id');
			$table->integer('department_id');
			$table->integer('room_id')->nullable();
			$table->integer('price')->nullable();
			$table->integer('months')->default(0);
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
		Schema::drop('orders');
	}

}
