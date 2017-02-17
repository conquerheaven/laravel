<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeiyongbxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feiyongbx', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('feiyonglx', 16);
			$table->string('fapname', 32);
			$table->string('pingname', 32);
			$table->string('dangwei', 8);
			$table->integer('shulian');
			$table->float('jinger', 10, 0);
			$table->text('yongtu', 16777215);
			$table->string('baoxiaoren', 16);
			$table->date('baoxiaoriqi');
			$table->string('lururen', 16);
			$table->date('lururiqi');
			$table->integer('shstats');
			$table->string('fushengren', 16);
			$table->date('fushengriqi');
			$table->string('zhifufans', 16);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feiyongbx');
	}

}
