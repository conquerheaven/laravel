<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePingjiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pingjia', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->text('name', 16777215);
			$table->integer('kehuid');
			$table->string('addone', 32);
			$table->date('adday');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pingjia');
	}

}
