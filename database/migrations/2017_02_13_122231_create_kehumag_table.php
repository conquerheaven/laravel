<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKehumagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kehumag', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('kehubh', 32);
			$table->string('name', 32);
			$table->text('campany', 16777215);
			$table->text('address', 16777215);
			$table->string('telphone', 32);
			$table->string('tuoyunb', 64);
			$table->text('tuoyunbdz', 16777215);
			$table->string('tuoyunbdh', 64);
			$table->date('addtime');
			$table->integer('dengji');
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
		Schema::drop('kehumag');
	}

}
