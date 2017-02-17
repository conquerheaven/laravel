<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHaocaimagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('haocaimag', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('hcid');
			$table->integer('dwid');
			$table->integer('num');
			$table->integer('ygid');
			$table->date('dates');
			$table->string('addname', 32);
			$table->text('bz', 16777215);
			$table->integer('stats');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('haocaimag');
	}

}
