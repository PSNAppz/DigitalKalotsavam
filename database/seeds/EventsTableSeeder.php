<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('events')->insert([
        [
          'name' => 'classical_dance_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'classical_dance_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'semi_classical_dance_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'semi_classical_dance_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'fancy_dress_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'fancy_dress_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'monoact_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'monoact_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'mimicry_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'mimicry_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'kadhaprasangam',
          'category_id' => '1'
        ],
        [
          'name' => 'Shakespearean_monologue',
          'category_id' => '1'
        ],
        [
          'name' => 'elocution_malayalam',
          'category_id' => '1'
        ],
        [
          'name' => 'elocution_english',
          'category_id' => '1'
        ],
        [
          'name' => 'elocution_telugu',
          'category_id' => '1'
        ],
        [
          'name' => 'elocution_sanskrit',
          'category_id' => '1'
        ],
        [
          'name' => 'recitation_english',
          'category_id' => '1'
        ],
        [
          'name' => 'recitation_malayalam',
          'category_id' => '1'
        ],
        [
          'name' => 'recitation_hindi',
          'category_id' => '1'
        ],
        [
          'name' => 'recitation_telugu',
          'category_id' => '1'
        ],
        [
          'name' => 'recitation_sanskrit',
          'category_id' => '1'
        ],
        [
          'name' => ' classical_music_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'classical_music_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'light_music_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'light_music_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'western_solo_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'western_solo_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'instrument_percussion',
          'category_id' => '1'
        ],
        [
          'name' => 'instrument_wind',
          'category_id' => '1'
        ],
        [
          'name' => 'instrument_string',
          'category_id' => '1'
        ],
        [
          'name' => 'instrument_piano',
          'category_id' => '1'
        ],
        [
          'name' => 'karaoke_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'karaoke_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'ashtapadi_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'ashtapadi_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'mappilapattu_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'mappilapattu_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'kadhakali_sangeetham_boys',
          'category_id' => '1'
        ],
        [
          'name' => 'kadhakali_sangeetham_girls',
          'category_id' => '1'
        ],
        [
          'name' => 'story_writing_english',
          'category_id' => '2'
        ],
        [
          'name' => 'story_writing_malayalam',
          'category_id' => '2'
        ],
        [
          'name' => 'essay_writing_english',
          'category_id' => '2'
        ],
        [
          'name' => 'essay_writing_malayalam',
          'category_id' => '2'
        ],
        [
          'name' => 'essay_writing_tamil',
          'category_id' => '2'
        ],
        [
          'name' => 'poetry_writing_english',
          'category_id' => '2'
        ],
        [
          'name' => 'poetry_writing_malayalam',
          'category_id' => '2'
        ],
        [
          'name' => 'poetry_writing_telugu',
          'category_id' => '2'
        ],
        [
          'name' => 'hindi_essay',
          'category_id' => '2'
        ],
        [
          'name' => 'water_coloring',
          'category_id' => '2'
        ],
        [
          'name' => 'cartooning',
          'category_id' => '2'
        ],
        [
          'name' => 'pencil_drawing',
          'category_id' => '2'
        ],
        [
          'name' => 'paper_collage',
          'category_id' => '2'
        ],
        [
          'name' => 'face_painting',
          'category_id' => '2'
        ],
        [
          'name' => 'rangoli',
          'category_id' => '2'
        ],
        [
          'name' => 'clay_modeling',
          'category_id' => '2'
        ]
      ]);
    }
}
