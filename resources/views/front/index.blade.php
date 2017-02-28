@extends('front.layouts.default')

@section('content')

@include('front.home.carousel')
@include('front.home.videos')
@include('front.home.pilares')
<div class="home-articulos container-fluid">
  <div class="row">
    <img src="/img/test/destacados-home.jpg" style="width:100%" alt="">
  </div>
  </div>
@include('front.home.contacto')
@include('front.home.venta-libros')


@endsection
