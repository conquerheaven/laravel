<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKhtuiguangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('khtuiguang', function(Blueprint $table)
		{
			$table->integer('ID', true)->comment('客户推广编号');
			$table->string('Name', 30)->comment('客户推广名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('khtuiguang');
	}

}
