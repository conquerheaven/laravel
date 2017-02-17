<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZxdangciTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zxdangci', function(Blueprint $table)
		{
			$table->integer('ID', true)->comment('装修档次编号');
			$table->string('Name', 30)->comment('装修档次名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zxdangci');
	}

}
