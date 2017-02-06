<?php

use Illuminate\Database\Seeder;

class TypeviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('typeviews')->insert([
          'name' => 'Pilar',
          'index_view' => 'front.pillars.index',
          'show_view' => 'front.pillars.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Artículo',
          'index_view' => 'front.articles.index',
          'show_view' => 'front.articles.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Programa',
          'index_view' => 'front.programs.index',
          'show_view' => 'front.programs.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Radio',
          'index_view' => 'front.radio.index',
          'show_view' => 'front.radio.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Prensa',
          'index_view' => 'front.prensa.index',
          'show_view' => 'front.prensa.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Evento',
          'index_view' => 'front.events.index',
          'show_view' => 'front.events.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Foto',
          'index_view' => 'front.photos.index',
          'show_view' => 'front.photos.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Libro',
          'index_view' => 'front.books.index',
          'show_view' => 'front.books.show',
          'dynamic' => 1
      ]);
      DB::table('typeviews')->insert([
          'name' => 'Contacto',
          'index_view' => 'front.contact.index',
          'show_view' => 'front.contact.show',
          'dynamic' => 0
      ]);
      DB::table('typeviews')->insert([
          'name' => 'PSR en Acción',
          'index_view' => 'front.actions.index',
          'show_view' => 'front.actions.show',
          'dynamic' => 0
      ]);
    }
}
