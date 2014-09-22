<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoneychangerIdAndBusinessDescriptionColumnsToCustomersTable extends Migration {

	public function up()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->integer('moneychanger_id')->after('id');
			$table->string('business_description')->after('remarks')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->dropColumn(['moneychanger_id','business_description']);
		});
	}

}
