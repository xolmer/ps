<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->boolean('done');
			$table->timestamps();

            $table->index('user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todos');
	}

}
