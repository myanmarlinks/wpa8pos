<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('products', function($table)
         {
            $table->increments('id');
			$table->string('product_name');
			$table->string('categories');
			$table->string('suppliers');
			$table->decimal('cost_price');
			$table->decimal('unit_price');
			$table->integer('quantity');
			$table->string('reorder_level');
			$table->string('location');
			$table->string('description');
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
		Schema::drop('products');
	}

}