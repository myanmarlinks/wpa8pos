<?php

use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('suppliers', function($table)
         {
            $table->increments('id');
			$table->string('company_name');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('phone_number');
			$table->string('address_1');
			$table->string('address_2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('country');
			$table->string('comment');
			$table->string('account');
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
		Schema::drop('suppliers');
	}

}