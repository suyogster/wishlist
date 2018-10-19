<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_title')->nullable(false);
            $table->longText('blog_content')->nullable(false);
            $table->longText('blog_description')->nullable(false);
            $table->string('thumbnail')->default('default.png');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('blogs', function ($table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
