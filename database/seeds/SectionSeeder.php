<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sections')->insert([
          'level' => 1,
          'section_id' => 0,
          'url' => '/',
          'name' => 'Proyecto Segunda República',
          'html_title' => 'Proyecto Segunda República',
          'typeview_id' => 1,
          'description' => 'Home description',
          'social_desc' => 'Home social description',
          'topnav' => 0,
          'topnav_back' => 0,
          'order' => 1,
      ]);

      DB::table('sections')->insert([
          'level' => 1,
          'section_id' => 0,
          'url' => 'pilares',
          'name' => 'Pilares',
          'html_title' => 'Pilares | Proyecto Segunda República',
          'typeview_id' => 1,
          'description' => 'Estos son los 5 Pilares, base estructural del Proyecto Segunda República.',
          'social_desc' => 'Estos son los 5 Pilares, base estructural del Proyecto Segunda República.',
          'topnav_back' => 1,
          'order' => 2,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'articulos',
        'name' => 'Artículos',
        'html_title' => 'Artículos | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Estos son los artículos realizados por el equipo de Proyecto Segunda República.',
        'social_desc' => 'Estos son los artículos realizados por el equipo de Proyecto Segunda República.',
        'topnav_back' => 1,
        'order' => 3,
      ]);

      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'programas',
        'name' => 'Programas',
        'html_title' => 'Programas | Proyecto Segunda República',
        'typeview_id' => 3,
        'description' => 'Estos son los programas de Proyecto Segunda República emitidos por el canal TLV1 "Toda la Verdad Primero".',
        'social_desc' => 'Estos son los programas de Proyecto Segunda República emitidos por el canal TLV1 "Toda la Verdad Primero".',
        'topnav_back' => 1,
        'order' => 4,
      ]);

      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'radio',
        'name' => 'Radio',
        'html_title' => 'Radio',
        'typeview_id' => 4,
        'description' => 'Estos son los porgramas de Radio que se emiten a lo largo de todo el País.',
        'social_desc' => 'Estos son los porgramas de Radio que se emiten a lo largo de todo el País.',
        'topnav_back' => 1,
        'order' => 5,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'prensa',
        'name' => 'Prensa',
        'html_title' => 'Prensa',
        'typeview_id' => 5,
        'description' => 'Aquí podrás ver todos los artículos, y videos relacionados a la Prensa de PSR.',
        'social_desc' => 'Aquí podrás ver todos los artículos, y videos relacionados a la Prensa de PSR.',
        'order' => 6,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'eventos',
        'name' => 'Eventos',
        'html_title' => 'Eventos',
        'typeview_id' => 6,
        'description' => 'Aquí podrás encontrar todos los eventos organizados por el PSR.',
        'social_desc' => 'Aquí podrás encontrar todos los eventos organizados por el PSR.',
        'order' => 7,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'fotos',
        'name' => 'Fotos',
        'html_title' => 'Fotos',
        'typeview_id' => 7,
        'description' => 'Fotos de las actividades y militancia del PSR.',
        'social_desc' => 'Fotos de las actividades y militancia del PSR.',
        'order' => 8,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'libros',
        'name' => 'Libros',
        'html_title' => 'Libros',
        'typeview_id' => 8,
        'description' => 'Estos son los libros que ofrecemos para dar una orientación del Proyecto Segunda República.',
        'social_desc' => 'Estos son los libros que ofrecemos para dar una orientación del Proyecto Segunda República.',
        'order' => 9,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'contacto',
        'name' => 'Contacto',
        'html_title' => 'Contacto',
        'typeview_id' => 9,
        'description' => 'Ponete en contacto con PSR.',
        'social_desc' => 'Ponete en contacto con PSR.',
        'order' => 10,
      ]);
      DB::table('sections')->insert([
        'level' => 1,
        'section_id' => 0,
        'url' => 'psr-en-accion',
        'name' => 'PSR en Acción',
        'html_title' => 'PSR en Acción',
        'typeview_id' => 10,
        'description' => 'Todas las iniciativas de la militancia de PSR.',
        'social_desc' => 'Todas las iniciativas de la militancia de PSR.',
        'order' => 11,
      ]);
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 2,
        'url' => 'estado-nacional-soberano',
        'name' => 'Estado Nacional Soberano',
        'html_title' => 'Estado Nacional Soberano',
        'typeview_id' => 1,
        'description' => 'Todo lo relacionado al Primer Pilar del PSR: Refundar un Estado Nacional Soberano.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR: Refundar un Estado Nacional Soberano.',
        'order' => 1,
      ]);
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 2,
        'url' => 'moneda-soberana',
        'name' => 'Moneda Soberana',
        'html_title' => 'Moneda Soberana',
        'typeview_id' => 1,
        'description' => 'Todo lo relacionado al Segundo Pilar del PSR: Establecer una Moneda Soberana.',
        'social_desc' => 'Todo lo relacionado al Segundo Pilar del PSR: Establecer una Moneda Soberana.',
        'order' => 2,
      ]);
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 2,
        'url' => 'rechazar-el-sistema-de-deuda',
        'name' => 'Rechazar el Sistema de Deuda',
        'html_title' => 'Rechazar el Sistema de Deuda',
        'typeview_id' => 1,
        'description' => 'Todo lo relacionado al Tercer Pilar del PSR: Rechazar el Sistema de deuda Pública Externa e Interna.',
        'social_desc' => 'Todo lo relacionado al Tercer Pilar del PSR: Rechazar el Sistema de deuda Pública Externa e Interna.',
        'order' => 3,
      ]);
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 2,
        'url' => 'rescatar-las-instituciones-republicanas',
        'name' => 'Rescatar las Instituciones Republicanas',
        'html_title' => 'Rescatar las Instituciones Republicanas',
        'typeview_id' => 1,
        'description' => 'Todo lo relacionado al Cuarto Pilar del PSR: Rescatar las Instituciones Republicanas de su dependencia del Dinero.',
        'social_desc' => 'Todo lo relacionado al Cuarto Pilar del PSR: Rescatar las Instituciones Republicanas de su dependencia del Dinero.',
        'order' => 4,
      ]);
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 2,
        'url' => 'restablecer-los-valores-eticos-y-morales',
        'name' => 'Restablecer los Valores Éticos y Morales',
        'html_title' => 'Restablecer los Valores Éticos y Morales',
        'typeview_id' => 1,
        'description' => 'Todo lo relacionado al Quinto Pilar del PSR: Restablecer los Valores Éticos y Morales.',
        'social_desc' => 'Todo lo relacionado al Quinto Pilar del PSR: Restablecer los Valores Éticos y Morales.',
        'order' => 5,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 4,
        'url' => 'bloque-nacional',
        'name' => 'Bloque Nacional',
        'html_title' => 'Bloque Nacional | Programas | Proyecto Segunda República',
        'typeview_id' => 3,
        'description' => 'Estos son los programas de Proyecto Segunda República emitidos por el canal TLV1 "Toda la Verdad Primero".',
        'social_desc' => 'Estos son los programas de Proyecto Segunda República emitidos por el canal TLV1 "Toda la Verdad Primero".',
        'topnav_back' => 1,
        'order' => 1,
      ]);
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 4,
        'url' => 'bloque-internacional',
        'name' => 'Bloque Interacional',
        'html_title' => 'Bloque Interacional | Programas | Proyecto Segunda República',
        'typeview_id' => 3,
        'description' => 'Estos son los programas de Proyecto Segunda República emitidos por el canal TLV1 "Toda la Verdad Primero".',
        'social_desc' => 'Estos son los programas de Proyecto Segunda República emitidos por el canal TLV1 "Toda la Verdad Primero".',
        'topnav_back' => 1,
        'order' => 2,
      ]);
//secciones de articulos
      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'soberania-y-estado',
        'name' => 'Soberanía y Estado',
        'html_title' => 'Soberanía y Estado | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Soberanía y Estado.',
        'social_desc' => 'Todo lo relacionado a Soberanía y Estado.',
        'order' => 1,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'economia',
        'name' => 'Economía',
        'html_title' => 'Economía',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Economía.',
        'social_desc' => 'Todo lo relacionado a Economía.',
        'order' => 1,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'politica-internacional',
        'name' => 'Política Internacional',
        'html_title' => 'Política Internacional | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Política Internacional.',
        'social_desc' => 'Todo lo relacionado a Política Internacional.',
        'order' => 1,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'deuda-externa',
        'name' => 'Deuda Externa',
        'html_title' => 'Deuda Externa | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Deuda Externa.',
        'social_desc' => 'Todo lo relacionado a Deuda Externa.',
        'order' => 1,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'energia-y-medio-ambiente',
        'name' => 'Energía y Medio Ambiente',
        'html_title' => 'Energía y Medio Ambiente | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Energía y Medio Ambiente.',
        'social_desc' => 'Todo lo relacionado a Energía y Medio Ambiente.',
        'order' => 1,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'cultura',
        'name' => 'Cultura',
        'html_title' => 'Cultura | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Cultura.',
        'social_desc' => 'Todo lo relacionado a Cultura.',
        'order' => 1,
      ]);

      DB::table('sections')->insert([
        'level' => 2,
        'section_id' => 3,
        'social_img'=>'/img/test/psr-noticias.jpg',
        'url' => 'geopolitica',
        'name' => 'Geopolítica',
        'html_title' => 'Geopolítica | Proyecto Segunda República',
        'typeview_id' => 2,
        'description' => 'Todo lo relacionado a Geopolítica.',
        'social_desc' => 'Todo lo relacionado a Geopolítica.',
        'order' => 1,
      ]);

    }
}
