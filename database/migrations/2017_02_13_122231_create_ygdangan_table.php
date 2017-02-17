<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateYgdanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ygdangan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 16);
			$table->string('sfzhao', 32);
			$table->string('bmname', 16);
			$table->string('gzname', 16);
			$table->string('bianhao', 18);
			$table->string('xueli', 16);
			$table->string('xinbie', 8);
			$table->date('birthday')->default('0000-00-00');
			$table->text('address', 16777215);
			$table->string('telphone', 64);
			$table->date('rztime');
			$table->date('lztime');
			$table->text('beizhu', 16777215);
			$table->integer('stats');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ygdangan');
	}

}
