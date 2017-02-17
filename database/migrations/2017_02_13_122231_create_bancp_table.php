<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBancpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bancp', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('cpid');
			$table->integer('gxid');
			$table->float('gqian', 10, 0);
			$table->integer('leftnum');
			$table->string('name', 16);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bancp');
	}

}
