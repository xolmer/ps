<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('username');
			$table->string('password');
			$table->string('email_address');
			$table->string('mobile_number');
			$table->string('country_of_residence');
			$table->boolean('has_avatar')->default(false);
			$table->boolean('is_active')->default(true);
            $table->string('timezone')->default('Asia/Kuala_Lumpur');
			$table->timestamp('last_login')->nullable();
			$table->string('remember_token')->nullable();
            $table->string('theme_color')->default('green');
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
		Schema::drop('users');
	}

}
