<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
           $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('post_id');
            $table->integer('like');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
