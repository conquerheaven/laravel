<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShoukuandateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shoukuandate', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('ddid')->index('ddid');
			$table->date('sktime');
			$table->float('koukuan', 10, 0);
			$table->float('zhuanchefei', 10, 0);
			$table->float('dakuan', 10, 0);
			$table->float('xianjing', 10, 0);
			$table->float('tuodang', 10, 0);
			$table->float('qiandang', 10, 0);
			$table->string('tuobian', 16);
			$table->string('skrtype', 10);
			$table->string('chaozuoren', 32);
			$table->string('cwbh', 11)->comment('财务编号');
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
		Schema::drop('shoukuandate');
	}

}
