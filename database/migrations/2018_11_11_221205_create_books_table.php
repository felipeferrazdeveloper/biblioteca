<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('pages');
            $table->string('edition');
            $table->string('ISBN');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedInteger('author_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('publish_house_id');

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('publish_house_id')->references('id')->on('publish_houses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
