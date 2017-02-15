@extends('front.layouts.interna-innermenu-layout')
@section('content')

<div class="container-fluid section prensa">

  <div class="row reel">

    <div class="video-container">
        <iframe id="ytplayer" type="text/html" width="100%" height="360"
        src="http://www.youtube.com/embed/aa7bBoBYx4g" frameborder="0"></iframe>
      </div>
  </div>

  @include('front.prensa.assets.carousel',['type'=>'Videos','contenidos'=>$videos,'class'=>'videos'])
  @include('front.prensa.assets.carousel',['type'=>'Artículos','contenidos'=>$articulos,'class'=>'articulos'])
  @include('front.prensa.assets.carousel',['type'=>'Radio','contenidos'=>$radio,'class'=>'radio'])

</div>



@endsection
