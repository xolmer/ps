<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBankAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_bank_accounts', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('country_id');
            $table->string('bank_name');
            $table->string('account_holder_name');
            $table->string('account_number');
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->index('customer_id');


        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_bank_accounts');
	}

}
