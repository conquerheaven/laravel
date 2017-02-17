<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThmessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thmessage', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('kehuid');
			$table->text('productsid', 65535);
			$table->float('zhuanchefei', 10, 0);
			$table->float('youhui', 10, 0);
			$table->string('chaozuoren', 16);
			$table->date('thtime');
			$table->text('beizhu', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thmessage');
	}

}
