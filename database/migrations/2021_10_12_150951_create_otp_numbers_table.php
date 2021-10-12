<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtpNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otp_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unsigned();
            $table->string('otp_from');
            $table->bigInteger('otp_number')->unsigned();
            $table->dateTime('datetime')->default(now());
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
        Schema::dropIfExists('otp_numbers');
    }
}
