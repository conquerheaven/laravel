<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('name', 32);
			$table->string('idname', 32);
			$table->integer('classid');
			$table->float('pfrich', 10, 0);
			$table->float('lsrich', 10, 0);
			$table->integer('outnums');
			$table->integer('leftnums');
			$table->integer('caizhi')->index('caizhi');
			$table->integer('yanshe')->index('yanshe');
			$table->integer('xianguan');
			$table->string('picurl', 64);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
