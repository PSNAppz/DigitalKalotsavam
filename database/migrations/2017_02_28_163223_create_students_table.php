<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->primary('rollno');
            $table->string('rollno');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('classical_dance_boys')->nullable();
            $table->integer('classical_dance_girls')->nullable();
            $table->integer('semi_classical_dance_boys')->nullable();
            $table->integer('semi_classical_dance_girls')->nullable();
            $table->integer('fancy_dress_boys')->nullable();
            $table->integer('fancy_dress_girls')->nullable();
            $table->integer('monoact_boys')->nullable();
            $table->integer('monoact_girls')->nullable();
            $table->integer('mimicry_boys')->nullable();
            $table->integer('mimicry_girls')->nullable();
            $table->integer('kadhaprasangam')->nullable();
            $table->integer('shakespearean_monologues')->nullable();
            $table->integer('elocution_malayalam')->nullable();
            $table->integer('elocution_english')->nullable();
            $table->integer('elocution_telugu')->nullable();
            $table->integer('elocution_sanskrit')->nullable();
            $table->integer('recitation_english')->nullable();
            $table->integer('recitation_malayalam')->nullable();
            $table->integer('recitation_hindi')->nullable();
            $table->integer('recitation_telugu')->nullable();
            $table->integer('recitation_sanskrit')->nullable();
            $table->integer('classical_music_boys')->nullable();
            $table->integer('classical_music_girls')->nullable();
            $table->integer('light_music_boys')->nullable();
            $table->integer('light_music_girls')->nullable();
            $table->integer('western_solo_boys')->nullable();
            $table->integer('western_solo_girls')->nullable();
            $table->integer('instrument_percussion')->nullable();
            $table->integer('instrument_wind')->nullable();
            $table->integer('instrument_string')->nullable();
            $table->integer('instrument_piano')->nullable();
            $table->integer('karaoke_boys')->nullable();
            $table->integer('karaoke_girls')->nullable();
            $table->integer('ashtapadi_boys')->nullable();
            $table->integer('ashtapadi_girls')->nullable();
            $table->integer('mappilapattu_boys')->nullable();
            $table->integer('mappilapattu_girls')->nullable();
            $table->integer('kadhakali_sangeetham_boys')->nullable();
            $table->integer('kadhakali_sangeetham_girls')->nullable();
            $table->integer('story_writing_english')->nullable();
            $table->integer('story_writing_malayalam')->nullable();
            $table->integer('essay_writing_english')->nullable();
            $table->integer('essay_writing_malayalam')->nullable();
            $table->integer('essay_writing_tamil')->nullable();
            $table->integer('poetry_writing_english')->nullable();
            $table->integer('poetry_writing_malayalam')->nullable();
            $table->integer('poetry_writing_telugu')->nullable();
            $table->integer('hindi_essay')->nullable();
            $table->integer('water_coloring')->nullable();
            $table->integer('cartooning')->nullable();
            $table->integer('pencil_drawing')->nullable();
            $table->integer('paper_collage')->nullable();
            $table->integer('face_painting')->nullable();
            $table->integer('rangoli')->nullable();
            $table->integer('clay_modeling')->nullable();
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
        Schema::dropIfExists('students');
    }
}
