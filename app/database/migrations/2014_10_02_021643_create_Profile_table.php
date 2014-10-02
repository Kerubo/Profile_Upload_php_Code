<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('profiles',function($table)
			{
				$table->increments('id');
				$table->string('fname');
				$table->string('lname');
				$table->integer('phone n');
				$table->string('photo number');
				$table->string('curriculum Vitae');
				$table->string('nickname');
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
		//
	}

}
