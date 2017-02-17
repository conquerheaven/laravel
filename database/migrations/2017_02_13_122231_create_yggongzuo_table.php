<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateYggongzuoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('yggongzuo', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('ygid');
			$table->integer('bancpid');
			$table->integer('nums');
			$table->float('realgq', 10, 0);
			$table->date('addtime');
			$table->string('accname', 32);
			$table->float('gzval', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('yggongzuo');
	}

}
