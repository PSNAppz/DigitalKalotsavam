<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Support extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('user_id')->unsigned();
         $table->foreign('user_id')
         ->references('id')->on('users')
         ->onDelete('cascade')->onUpdate('cascade');
         $table->string('subject');
         $table->text('message');
         $table->text('reply');
         $table->boolean('hide')->default(false);
         $table->boolean('replied')->default(false);
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
        Schema::dropIfExists('support');

    }
}
