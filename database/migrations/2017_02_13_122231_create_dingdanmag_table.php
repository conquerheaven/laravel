<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDingdanmagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dingdanmag', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('ddbianhao', 32);
			$table->text('productids', 16777215);
			$table->float('sums', 10, 0);
			$table->string('username', 16);
			$table->integer('yg_id');
			$table->integer('khid');
			$table->date('shtime');
			$table->date('ddtime');
			$table->integer('shrenid');
			$table->text('beizhu', 16777215);
			$table->integer('isshouk');
			$table->date('shouktime');
			$table->float('shouksum', 10, 0);
			$table->integer('isfree');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dingdanmag');
	}

}
