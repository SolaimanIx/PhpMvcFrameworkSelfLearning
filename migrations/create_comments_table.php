<?php

use Iliuminates\Database\Migration;
use Iliuminates\Database\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function ($table) {
            $table->id();
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('user_id');
            $table->text('content');
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
