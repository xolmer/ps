<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerContactDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_contact_details', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->string('mobile_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax_number')->nullable();

            $table->timestamps();

            //Nous avons utilizer les indices phone_number et mobile_number parce que
            //on va resercher par ces champs
            $table->index('customer_id');
            $table->index('phone_number');
            $table->index('mobile_number');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_contact_details');
	}

}
