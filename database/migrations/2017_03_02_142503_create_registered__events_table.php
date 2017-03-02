<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered__events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rollno');
            $table->foreign('rollno')
            ->references('rollno')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('eventid')->unsigned();
            $table->foreign('eventid')
            ->references('id')->on('events')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('categoryid')->unsigned();
            $table->foreign('categoryid')
            ->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('registered__events');
    }
}
