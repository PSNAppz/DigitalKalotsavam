<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisqualifiedListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disqualified_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rollno');
            $table->foreign('rollno')
            ->references('rollno')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->string('type');
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
        Schema::dropIfExists('disqualified_lists');
    }
}
