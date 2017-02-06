<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('front.layouts.assets.social-meta')
    @include('front.layouts.assets.header')

    @include('front.layouts.assets.nav')
    @yield('content')
    @include('front.layouts.assets.footer')
    @include('front.layouts.assets.closer')

<!--
                      git pull origin master //para BAJAR

pone:
git status
git add --all (esto es menos menos all)
git commit -m 'home en blade' (menos m es para poner un comentario, esto hay que hacerlo siempre sino te tira unos errores)
git push origin master

public function __construct() {
     View::share( 'path', 'http://localhost/psr/public' );
  }
  
-->
