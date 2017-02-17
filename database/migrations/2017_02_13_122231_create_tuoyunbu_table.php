<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTuoyunbuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tuoyunbu', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('name', 32);
			$table->string('ename', 10)->index('ename');
			$table->string('address', 64);
			$table->string('telephone', 64);
			$table->string('itemtel', 64);
			$table->string('item', 64);
			$table->text('beizhu', 16777215);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tuoyunbu');
	}

}
