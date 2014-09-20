<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoneyChangersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('money_changers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('country_id');
			$table->string('director_name');
			$table->string('director_last_name');
			$table->string('address');
			$table->string('phone_number1');
			$table->string('phone_number2');
			$table->string('mobile_number');
			$table->string('fax');
			$table->string('email_address');
			$table->softDeletes();
			$table->timestamps();

            $table->index('name');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('money_changers');
	}

}
