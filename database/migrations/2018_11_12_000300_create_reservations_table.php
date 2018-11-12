<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id')->references('id')->on('books');
            $table->unsignedInteger('user_id')->references('id')->on('users');
            $table->unsignedInteger('loan_id')->references('id')->on('loans');

            $table->boolean('isUser');
            $table->boolean('isManager');
            $table->boolean('isLibrarian');
            $table->boolean('isWorker');

            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('loan_id')->references('id')->on('loans');

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
        Schema::dropIfExists('reservations');
    }
}
