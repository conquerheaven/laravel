<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYgdangansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ygdangans', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name',16);
			$table->string('sfzhao',32);
			$table->string('bmname',16);
			$table->string('gzname',16);
			$table->string('bianhao',18);
			$table->string('xueli',16);
			$table->string('xinbie',8);
			$table->date('birthday');
			$table->mediumText('address');
			$table->string('telphone',64);
			$table->date('rztime');
			$table->date('lztime');
			$table->mediumText('beizhu');
			$table->integer('stats');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ygdangans');
	}

}
