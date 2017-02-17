<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMugonggzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mugonggz', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('cpid');
			$table->integer('num');
			$table->float('jiage', 10, 0);
			$table->float('heji', 10, 0);
			$table->integer('gxid');
			$table->string('actname', 16);
			$table->date('addtime');
			$table->integer('ygid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mugonggz');
	}

}
