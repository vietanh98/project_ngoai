<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InforBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infor_bank', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('user_id');
            $table->string('account_name');
            $table->integer('account_number');
            $table->integer('bank_name');
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
        Schema::dropIfExists('users_bank');
    }
}
