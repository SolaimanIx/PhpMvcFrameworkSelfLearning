<?php

use Iliuminates\Database\Migration;
use Iliuminates\Database\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function ($table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
