<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('fathers_name');
            $table->string('national_id')->nullable();
            $table->string('passport_number')->nullable();
            $table->integer('country_of_residence_id');
            $table->string('email_address')->nullable();
            $table->string('identity_link')->nullable();
            $table->string('remarks')->nullable();
			$table->timestamps();

            $table->index('full_name');
		});
	}

	/**
	 * Reverse the migrations.o
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
