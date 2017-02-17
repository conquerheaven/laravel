<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNahuomsgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nahuomsg', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('gyid');
			$table->integer('cpid');
			$table->integer('num');
			$table->float('djia', 10, 0);
			$table->float('sum', 10, 0);
			$table->date('adday');
			$table->string('addren', 8);
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
		Schema::drop('nahuomsg');
	}

}
