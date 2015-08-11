<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortlinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shortlinks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('shortlink', 40);
			$table->string('destinationUrl', 1000);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shortlinks');
	}

}
