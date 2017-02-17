<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMugongcpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mugongcp', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('name', 32);
			$table->float('jiage', 10, 0);
			$table->integer('typeid');
			$table->string('classtype', 16);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mugongcp');
	}

}
