<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailConfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_confirms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rollno');
            $table->foreign('rollno')
            ->references('rollno')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->string('email')->unique();
            $table->string('secret')->unique();
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
        Schema::dropIfExists('mail_confirms');
    }
}
