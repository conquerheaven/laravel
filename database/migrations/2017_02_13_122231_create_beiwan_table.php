<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeiwanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beiwan', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->boolean('type')->default(0)->comment('0、备忘1、客户回访提醒');
			$table->date('dtime');
			$table->date('addtime');
			$table->text('msg', 16777215);
			$table->string('user', 16);
			$table->string('adduser', 32);
			$table->boolean('state')->default(0)->comment('0未处理1、已处理');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('beiwan');
	}

}
