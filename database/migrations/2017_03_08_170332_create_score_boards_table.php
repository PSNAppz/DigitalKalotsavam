<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rollno');
            $table->foreign('rollno')
            ->references('rollno')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->string('house');
            $table->string('name');
            $table->integer('eventid')->unsigned();
            $table->foreign('eventid')
            ->references('id')->on('events')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('position');
            $table->string('grade');
            $table->integer('point');
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
        Schema::dropIfExists('score_boards');
    }
}
