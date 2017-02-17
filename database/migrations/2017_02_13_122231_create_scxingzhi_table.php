<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScxingzhiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scxingzhi', function(Blueprint $table)
		{
			$table->integer('ID', true)->comment('商场性质编号');
			$table->string('Name', 30)->comment('商场性质名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scxingzhi');
	}

}
