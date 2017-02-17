<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDdmessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ddmessage', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('danghao', 32);
			$table->string('piaohao', 32);
			$table->string('tuoyunhao', 32);
			$table->integer('kehuid')->index('kehuid');
			$table->text('productsid', 16777215);
			$table->float('sums', 10, 0);
			$table->float('zhuanchefei', 10, 0);
			$table->float('yishoukuan', 10, 0);
			$table->float('tuodang', 10, 0);
			$table->float('qiandang', 10, 0);
			$table->string('tuobian', 16);
			$table->float('youhui', 10, 0);
			$table->string('shoukuanfs', 32);
			$table->text('chuikuantel', 16777215);
			$table->string('chaozuoren', 16);
			$table->date('xiadangtime')->index('xiadangtime');
			$table->date('jieqingtime');
			$table->integer('stats');
			$table->float('shren', 10, 0);
			$table->string('shoukuanren', 16);
			$table->date('shoukuanri')->comment('收款日');
			$table->string('sdr', 10)->comment('收单人');
			$table->date('sdri')->index('sdri');
			$table->string('fhr', 10);
			$table->string('fhjs', 5);
			$table->string('ckr', 10)->comment('催款人');
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
		Schema::drop('ddmessage');
	}

}
