<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanmuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lanmu', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('name', 16);
			$table->string('url', 64);
			$table->integer('preid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lanmu');
	}

}
