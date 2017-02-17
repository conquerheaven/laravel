<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfigHfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('config_hf', function(Blueprint $table)
		{
			$table->string('username', 10)->index('username');
			$table->boolean('hfs')->default(0);
			$table->boolean('zdhfs')->default(0);
			$table->date('begin')->default('2222-02-02');
			$table->date('end')->default('2222-02-02');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('config_hf');
	}

}
