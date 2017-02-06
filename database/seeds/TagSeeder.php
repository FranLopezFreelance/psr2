<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->insert([
          'text' => 'Peronismo',
      ]);
      DB::table('tags')->insert([
          'text' => 'Nacionalismo',
      ]);
      DB::table('tags')->insert([
          'text' => 'Libros Clásicos',
      ]);
      DB::table('tags')->insert([
          'text' => 'Soberanía Política',
      ]);
      DB::table('tags')->insert([
          'text' => 'Estado Soberano',
      ]);
    }
}
