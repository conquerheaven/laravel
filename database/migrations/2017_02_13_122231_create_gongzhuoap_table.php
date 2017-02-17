<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGongzhuoapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gongzhuoap', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('ygid');
			$table->integer('cpid');
			$table->integer('num');
			$table->integer('oknum');
			$table->string('addname', 16);
			$table->date('adddate');
			$table->integer('gxid');
			$table->integer('stats');
			$table->string('beizhu', 64);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gongzhuoap');
	}

}
