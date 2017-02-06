
<div class="">

  <!--  @include('front.assets.stats')-->
<div class="articulo-recomendado">


    <div class="imagen">
      <a href="{{$content->getFullUrl()}}"><img class="full-width lazy" data-original="{{$content->getImageByType(3)}}" alt=""></a>
    </div>
    <div class="link">
        <a href="{{$content->getFullUrl()}}">{{str_limit($content->title,80)}}</a>
      </div>

<div class="clearfix"></div>
</div>

</div>
