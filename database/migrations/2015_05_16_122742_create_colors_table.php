<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('color');
			$table->timestamps();
		});

		Schema::create('color_product', function(Blueprint $table)
		{
			$table->integer('product_id')->unsigned()->index();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

			$table->integer('color_id')->unsigned()->index();
			$table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');

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
		Schema::drop('color_product');
		Schema::drop('colors');
	}

}
