<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBanchepinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banchepin', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('feilei', 16);
			$table->integer('name');
			$table->string('cpname', 32);
			$table->string('cpbianhao', 16);
			$table->integer('cp_id');
			$table->integer('ynfcz');
			$table->integer('leftnums');
			$table->float('gongqian', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('banchepin');
	}

}
