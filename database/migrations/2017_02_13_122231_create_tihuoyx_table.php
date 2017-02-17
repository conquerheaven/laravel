<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTihuoyxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tihuoyx', function(Blueprint $table)
		{
			$table->integer('ID', true)->comment('提货意向编号');
			$table->string('Name', 30)->comment('提货意向名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tihuoyx');
	}

}
