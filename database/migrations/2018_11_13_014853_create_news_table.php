<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->text('slug')->unique();
            $table->text('title');
            $table->text('description');
            $table->text('name');
            $table->text('caption');
            $table->text('body');
            $table->text('image_path');
            $table->boolean('is_published');
            $table->dateTime('date_published')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('views');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
