<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
          'id' => '1',
          'name' => 'Amritamayi',
          'email' => 'xyz@xyz.com',
          'password' => '$2y$10$C.vFgshEEZhaql0OYMAnP.UxNOXqi71CYN/nJj5r/4UwXZH.8YdKq',
          'role' => 0
        ],
        [
          'id' => '2',
          'name' => 'Jyothirmayi',
          'email' => 'abc@abc.com',
          'password' => '$2y$10$OpyKIgD55M/YxTPuVVRq4.EpSKirzkhIb5di3Olfqv1rUJe2USuz.',
          'role' => 0
        ],
        [
          'id' => '3',
          'name' => 'Anandamayi',
          'email' => 'test@test.com',
          'password' => '$2y$10$eq7K0zus6uvD1gn2mfhQWecf5ZBOc5kxvl4n6E.evW1FNy/aSGKHC',
          'role' => 0
        ],
        [
          'id' => '4',
          'name' => 'Chinmayi',
          'email' => 'noreply@noreply.com',
          'password' => '$2y$10$10cPaEwhvBFhlP.PC/dXDuWzALivNj/0ys67T2R212qsADsf3IyuS',
          'role' => 0
        ],
        [
          'id' => '10',
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'password' => '$2y$10$wmtXwrCv02GMB8DJeNSgcu9fo7enotQX.rhHjbYkMvAzRpDayraSq',
          'role' => 2
        ]
      ]);
    }
}
