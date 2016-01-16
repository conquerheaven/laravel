<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuoyunbusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tuoyunbus', function(Blueprint $table)
		{
			$table->increments('ID');

			$table->string('name',32);
			$table->string('ename',10);
			$table->string('address',64);
			$table->string('telephone',64);
			$table->string('itemtel',64);
			$table->string('item',64);
			$table->mediumText('beizhu');

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
		Schema::drop('tuoyunbus');
	}

}
