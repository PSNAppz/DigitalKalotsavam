<?php

use Illuminate\Database\Seeder;
use App\PublicScore;
class PublicScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PublicScore::truncate();
      DB::table('public_scores')->insert([
        ['id'=>'1','house'=>'Amritamayi'],
        ['id'=>'2','house'=>'Jyothirmayi'],
        ['id'=>'3','house'=>'Anandamayi'],
        ['id'=>'4','house'=>'Chinmayi']]
        );
    }
}
