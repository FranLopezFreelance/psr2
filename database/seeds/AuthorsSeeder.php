<?php

use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authors')->insert([
          'name' => 'Adrián Salbuchi',
          'img' => 'default.jpg',
          'active' => 1,
      ]);
      DB::table('authors')->insert([
          'name' => 'Enrique Romero',
          'img' => 'default.jpg',
          'active' => 1,
      ]);
      DB::table('authors')->insert([
          'name' => 'Héctor Giuliano',
          'img' => 'default.jpg',
          'active' => 1,
      ]);
      DB::table('authors')->insert([
          'name' => 'Denes Martos',
          'img' => 'default.jpg',
          'active' => 1,
      ]);
    }
}
