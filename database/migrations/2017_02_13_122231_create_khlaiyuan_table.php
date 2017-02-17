<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKhlaiyuanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('khlaiyuan', function(Blueprint $table)
		{
			$table->integer('ID', true)->comment('客户来源编号');
			$table->string('Name', 30)->comment('客户来源名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('khlaiyuan');
	}

}
