<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChangkumagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('changkumag', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('user', 16);
			$table->string('action', 32);
			$table->string('proname', 32);
			$table->string('proid', 32);
			$table->integer('pID');
			$table->integer('num');
			$table->dateTime('updt');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('changkumag');
	}

}
