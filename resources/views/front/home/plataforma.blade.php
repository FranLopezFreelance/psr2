
<div class="home-videos-plataforma container-fluid">
  <h4 class="title">Plataforma PSR</h4>
  <div class="row">
    <div class="col-xs-12 col-md-6 video-plataforma">
      <div class="video">
        <a href="{{$plataforma->getFullUrl()}}">
		        <img  data-original="{{$plataforma->getImageByType(2)}}" alt="" >
		    </a>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 ">
	<h4 class="title title2" >{{$plataforma->title}}</h4>
      <div class="plataforma">
        <?php $text = preg_replace("/<img[^>]+\>/i", " ", $plataforma->text); ?>
	       {!!$text!!}
      </div>
    </div>
  </div>

  <div class="videos-content-plataforma" data-next-page="1">

      <?php $colsm = 3; $colmd = 3; ?>
      @foreach($videosplataforma as $content)

      @include('front.assets.list-content.content-list-video',$content)

      @endforeach
<div class="clearfix"></div>
  </div>

  <div class="row">
    <div class="verMas col-xs-12">
      <a class="verMasVideos-plataforma" onClick="verMasVideosPlataforma()">Ver Más</a>
      <div class="spinner-wrapper plataforma home">@include('front.assets.material-loading')</div>
    </div>

  </div>
  </div>

<div class="container-fluid">
  <div class="row">

      <a href="/articulos/geopolitica/patagonia-12-ejes-de-conflicto"><img class="lazypilar"  data-original="/img/home/patagonia-12-ejes-de-conflicto.jpg" alt=""></a>

  </div>
    </div>
