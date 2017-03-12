<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('house');
            $table->integer('fscore')->default(0);
            $table->integer('sscore')->default(0);
            $table->integer('tscore')->default(0);
            $table->integer('foscore')->default(0);
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('public_scores');
    }
}
