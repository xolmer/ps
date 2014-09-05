<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerSendersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_senders', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fathers_name');
            $table->string('national_id')->nullable();
            $table->string('passport_number')->nullable();
            $table->integer('country_id');
            $table->string('mobile_number')->nullable();;
            $table->string('phone_number')->nullable();;
            $table->string('email_address')->nullable();
            $table->string('identity_link')->nullable();
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
        Schema::drop('customer_senders');
    }

}
