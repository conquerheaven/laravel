<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminnameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adminname', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->string('UserName', 32);
			$table->string('PassWord', 32);
			$table->integer('ClassTyep');
			$table->string('yg_id', 6);
			$table->string('gnengid', 128);
			$table->string('authority', 128);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adminname');
	}

}
