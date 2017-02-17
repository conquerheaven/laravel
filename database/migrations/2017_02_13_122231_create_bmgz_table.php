<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBmgzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bmgz', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('bm_name', 32);
			$table->string('bm_id', 32);
			$table->string('gz_name', 32);
			$table->string('gz_id', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bmgz');
	}

}
