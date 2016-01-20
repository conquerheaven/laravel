<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZwsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zws', function(Blueprint $table)
		{
			$table->increments('ID');

			$table->string('bm_name',32);
			$table->string('bm_id',32);
			$table->string('gz_name',32);
			$table->string('gz_id',32);

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zws');
	}

}
