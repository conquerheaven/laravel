<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZhichumagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zhichumag', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('dates', 16);
			$table->string('pzhao', 16);
			$table->string('fenhao', 16);
			$table->integer('gysid');
			$table->string('kuaiji', 16);
			$table->string('jinsren', 16);
			$table->string('shenhren', 16);
			$table->integer('num');
			$table->integer('total');
			$table->integer('kemuid');
			$table->string('bz', 64);
			$table->integer('stats');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zhichumag');
	}

}
