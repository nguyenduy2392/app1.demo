<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pictures', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('description')->nullable();;
			$table->string('image', 255);
			$table->string('latitude', 50);
			$table->string('longitude', 50);
			$table->rememberToken();
			$table->timestamps();
	        $table->softDeletes();
	        /* connect */
	        $table->integer('user_id')->unsigned()->nullable();
	        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->integer('category_id')->unsigned()->nullable();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pictures');
	}

}
