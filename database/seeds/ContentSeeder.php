<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contents')->insert([
        'section_id' => 11,
        'url' => 'primer-pilar',
        'title' => 'Primer Pilar',
        'html_title' => 'Restablecer los Valores Éticos y Morales',
        'typeview_id' => 1,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ]);

      $articulo = [
        'section_id' => 20,
        'url' => 'moneda-soberana',
        'title' => 'Moneda Soberana',
        'img_url' => '/img/test/bonos.jpg',
        'html_title' => 'Moneda Soberana',
        'typeview_id' => 2,
        'date' => '2017-01-01',
        'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
        'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
                A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
                Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
                Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
      ];

      for ($i = 1; $i <= 100; $i++) {
          $art = array_merge($articulo);
          $art['url']= $art['url'].$i;
          $art['title']= $art['title'].'--'.$i;
          DB::table('contents')->insert($art);
      }


$video = [
  'section_id' => 17,
  'url' => 'videoZZZ',
  'img_url' => '/img/test/video-1.jpg',
  'title' => 'Ejemplo de Video',
  'html_title' => 'Ejemplo de Video',
  'typeview_id' => 3,
  'date' => '2017-01-01',
  'description' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'social_desc' => 'Todo lo relacionado al Primer Pilar del PSR.',
  'text' => 'Refundar el Estado Nacional Soberano conforma nuestro Primer Pilar.  Es, lejos, lo más importante pues sin la refundación de un Estado Nacional Soberano, nada de los que propone nuestro Proyecto Segunda República es factible.
          A lo largo de las últimas décadas, el Estado Argentino fue debilitado, erosionado y distorsionado hasta convertirse en lo que es hoy: un Ente de Administración Colonial que no sólo no opera a favor de intereses de la vasta mayoría del Pueblo Argentino, sino hoy es evidente que lo hace en contra del Pueblo Argentino.
          Sólo basta observar la inoperancia criminal en torno a los ferrocarriles; la persecución perpetrada por entes como AFIP que confiscan el fruto del trabajador argentino para entregarlo a criminales locales y banqueros usureros internacionales – claramente “roban para la corona”; los desfalcos al erario público como el Escándalo Ciccone cometido por el vicepresidente Amado Boudou; o la falsificación sistemática de datos y estadísticas vitales por el INDEC y el secretario de comercio G. Moreno…  Apenas algunos ejemplos que reflejan una terrible realidad: en esta Argentina Colonia, el peor Enemigo del Pueblo es el propio Estado que permanentemente lo agrede, le miente y le ROBA.
          Correspondientemente, hoy el Pueblo Argentino tiene la Misión de luchar por la recuperación del Estado Soberano que le ha sido quitado.   Esto no se logra con “reformas y emparches” del Estado Colonial que nos han impuesto, sino impulsando una auténtica REVOLUCIÓN del pensamiento, de las ideas, de la Voluntad, del autorespeto y de la solidaridad.',
];

for ($i = 1; $i <= 100; $i++) {
    $vid = array_merge($video);
    $vid['url']= $vid['url'].$i;
    $vid['title']= $vid['title'].'--'.$i;
    DB::table('contents')->insert($vid);
}
$video['section_id']=18;
for ($i = 1; $i <= 100; $i++) {
    $vid = array_merge($video);
    $vid['url']= $vid['url'].$i;
    $vid['title']= $vid['title'].'--'.$i;
    DB::table('contents')->insert($vid);
}




  }
}
