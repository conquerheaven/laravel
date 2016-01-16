<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKehusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kehus', function(Blueprint $table)
		{
			$table->increments('ID');

			$table->string('name');
			$table->string('khly',32);
			$table->string('khly2',32);
			$table->integer('khpj');
			$table->integer('jsxz');
			$table->string('ename',20);
			$table->string('scname',50);
			$table->mediumText('address');
			$table->string('telephone',64);
			$table->string('telephone2' , 25);
			$table->string('mobile',20);
			$table->string('chuanzheng',20);
			$table->integer('tybid');
			$table->integer('dqid');
			$table->integer('sheng');
			$table->integer('city');
			$table->integer('xian');
			$table->integer('street');
			$table->integer('tall');
			$table->string('fuzheren',32);
			$table->string('pingpai',30);
			$table->string('pplx',20);
			$table->integer('mj');
			$table->string('pingpai2' , 30);
			$table->string('pplx2' , 20);
			$table->integer('mj2');
			$table->date('lasthftime');
			$table->string('hfren',10);
			$table->date('lastjytime');
			$table->string('caozuoren',16);
			$table->mediumText('beizhu');
			$table->date('addtime');
			$table->integer('tihuoyx');
			$table->string('baifangren',30);
			$table->integer('khtuiguang');
			$table->integer('zxdangci');
			$table->float('scmianji');
			$table->integer('scxingzhi');
			$table->string('dzname',30);
			$table->string('dztelephone',30);
			$table->string('dzqq',30);
			$table->string('dzqita',50);
			$table->mediumText('pingjia');
			$table->integer('gaihang');
			$table->integer('khlaiyuan');
			$table->integer('yearsaleval');
			$table->integer('dianyuannum');
			$table->integer('chuyangnum');

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
		Schema::drop('kehus');
	}

}
