<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBanchepinmagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banchepinmag', function(Blueprint $table)
		{
			$table->integer('ID');
			$table->string('yanshe', 16);
			$table->string('caizhi', 16);
			$table->string('dangwei', 8);
			$table->integer('nums');
			$table->integer('yifuguanxi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('banchepinmag');
	}

}
