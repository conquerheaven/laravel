<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGongzuorzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gongzuorz', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->text('zhuti', 16777215);
			$table->date('addtime');
			$table->string('lururen', 32);
			$table->integer('kehuid');
			$table->text('msg', 16777215);
			$table->text('pizhu', 16777215);
			$table->integer('useid');
			$table->integer('jltypeid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gongzuorz');
	}

}
