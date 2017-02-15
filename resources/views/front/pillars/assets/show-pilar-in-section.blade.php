
@if($target->id == 12 || $target->id == 13 || $target->id == 14)

      <img class="infografia" src="/img/pilares/infografias/{{$target->url}}.jpg" alt="">

@endif
      <div class="info-pilar">
        <div class="col-xs-9">
          {!!(count($contents))? $contents[0]->text:'No hay contenido'!!}
        </div>
        <div class="sidebar col-xs-3 ">
            @include('front.pillars.assets.sidebar')
        </div>

      </div>
