<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserMailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_mails', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->integer('mail_id');
            $table->integer('reciever_id');
            $table->boolean('is_read')->default(false);
            $table->boolean('is_starred')->default(false);
            $table->softDeletes();
			$table->timestamps();

            $table->index('reciever_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_mails');
	}

}
