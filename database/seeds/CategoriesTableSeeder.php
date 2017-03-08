<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::truncate();
        DB::table('categories')->insert(
          ['name' => 'Onstage'],
          ['name' => 'Offstage'],
          ['name' => 'Group']
        );
    }
}
