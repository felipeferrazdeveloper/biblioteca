<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('loanDate');
            $table->date('returnDate');
            $table->date('expectedReturnDate');

            $table->unsignedInteger('user-id');
            $table->unsignedInteger('copy-id');

            $table->foreign('user-id')->references('id')->on('users');
            $table->foreign('copy-id')->references('id')->on('copies');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
