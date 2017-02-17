<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXiaoshoulistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('xiaoshoulist', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('danghao', 20);
			$table->char('piaohao', 8);
			$table->integer('kehuid')->index('kehuid');
			$table->date('xiadangtime');
			$table->integer('classid');
			$table->integer('goodid');
			$table->integer('price');
			$table->integer('num');
			$table->integer('sum');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('xiaoshoulist');
	}

}
