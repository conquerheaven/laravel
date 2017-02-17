<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKehulistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kehulist', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('name', 32);
			$table->string('khly', 20);
			$table->string('khly2', 20);
			$table->boolean('khpj')->default(0);
			$table->boolean('jsxz');
			$table->string('ename', 20)->index('ename');
			$table->string('scname', 50);
			$table->text('address', 16777215);
			$table->string('telephone', 64);
			$table->string('telephone2', 25);
			$table->string('mobile', 20);
			$table->string('chuanzheng', 20);
			$table->integer('tybid');
			$table->integer('dqid');
			$table->integer('sheng');
			$table->integer('city');
			$table->integer('xian');
			$table->integer('street');
			$table->integer('tall');
			$table->string('fuzheren', 32);
			$table->string('pingpai', 30);
			$table->string('pplx', 20);
			$table->integer('mj');
			$table->string('pingpai2', 30);
			$table->string('pplx2', 20);
			$table->integer('mj2');
			$table->date('lasthftime');
			$table->string('hfren', 10);
			$table->date('lastjytime');
			$table->string('caozuoren', 16);
			$table->text('beizhu', 16777215);
			$table->date('addtime')->default('2013-08-03')->comment('录入时间');
			$table->integer('tihuoyx')->comment('提货意向');
			$table->string('baifangren', 30)->comment('客户拜访人');
			$table->integer('khtuiguang')->comment('客户推广');
			$table->integer('zxdangci')->comment('装修档次');
			$table->float('scmianji', 10, 0)->comment('商场面积');
			$table->integer('scxingzhi')->comment('商场性质');
			$table->string('dzname', 30)->comment('店长姓名');
			$table->string('dztelephone', 30)->comment('店长电话');
			$table->string('dzqq', 30)->comment('店长QQ');
			$table->string('dzqita', 50)->comment('店长其他');
			$table->text('pingjia', 16777215)->comment('评价');
			$table->integer('gaihang')->default(0)->comment('是否改行');
			$table->integer('khlaiyuan')->comment('客户来源');
			$table->integer('yearsaleval')->comment('年销售评估');
			$table->integer('dianyuannum')->comment('店员数量');
			$table->integer('chuyangnum')->comment('出样数量');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kehulist');
	}

}
