<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveRecieverIDIsReadIsStarredFromMails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mails', function(Blueprint $table)
		{
            $table->dropColumn(array ( 'receiver_id', 'is_read','is_starred'  ) );
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mails', function(Blueprint $table)
		{
            $table->string(['receiver_id', 'is_read','is_starred']);
		});
	}

}
