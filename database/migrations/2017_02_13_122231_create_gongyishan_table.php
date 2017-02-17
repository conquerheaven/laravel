<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGongyishanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gongyishan', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('name', 16);
			$table->string('phone', 64);
			$table->text('beizhu', 16777215);
			$table->integer('kemuid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gongyishan');
	}

}
