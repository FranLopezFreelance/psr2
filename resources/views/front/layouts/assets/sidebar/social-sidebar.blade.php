<?php
$social = [
  ['name'=>"facebook",'url'=>'http://wwww.facebook.com'],
  ['name'=>"twiter",'url'=>'http://wwww.facebook.com'],
  ['name'=>"youtube",'url'=>'http://wwww.facebook.com'],
  ['name'=>"gplus",'url'=>'http://wwww.facebook.com'],
];
?>

<div class="redes">
  @foreach($social as $red)
    <a href="{{$red['url']}}"><img src="/img/social/{{$red['name']}}.jpg" alt=""></a>
  @endforeach
</div>
