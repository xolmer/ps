<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mails', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('sender_id');
            $table->integer('reciever_id');
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
            $table->boolean('is_read')->default(false);;
            $table->boolean('is_starred')->default(false);
            $table->integer('priority');
            $table->softDeletes();
			$table->timestamps();

            $table->index('reciever_id');
            $table->index('sender_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mails');
	}

}
