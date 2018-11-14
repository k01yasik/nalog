<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->unsignedInteger('education_id');
            $table->unsignedInteger('course_number');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('education_id')->references('id')->on('education');
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
        Schema::dropIfExists('education_lists');
    }
}
