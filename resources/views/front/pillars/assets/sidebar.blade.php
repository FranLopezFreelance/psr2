<div class="row">
  <div class="col-xs-12">
    <div class="infografias sidebar-item">
      <p class="sidebar-title">Infografías</p>
      <a data-toggle="modal" data-target="#pilar-infografia-modal">
        <img src="/img/pilares/infografias/thumb-{{$target->url}}.jpg" alt="">
      </a>
    </div>
  </div>

  <div class="col-xs-12">
    <div class="videos sidebar-item">
      <p class="sidebar-title">Videos de Doctrina</p>

      <?php     $video =  array('views'=>'50','title'=>'Doctrina: Primer Pilar','img_url'=>'/img/test/video-mini-2.jpg','video_id'=>'qvsVtMhVGaU');?>

      <div class="mini">
        <div class="content-mini">
        <a onclick="showModalVideo('{{$video['video_id']}}')"><img src="{{$video['img_url']}}" alt=""></a>
        <a onclick="showModalVideo('{{$video['video_id']}}')"><p class="title {{!(strlen($video['title'])>40)?'':'short'}}">{{str_limit($video['title'],50)}}</p></a>
        </div>
      </div>

<?php     $video =  array('views'=>'50','title'=>'Doctrina: Segundo Pilar','img_url'=>'/img/test/video-1.jpg','video_id'=>'qvsVtMhVGaU');?>

      <div class="mini">
        <div class="content-mini">
        <a onclick="showModalVideo('{{$video['video_id']}}')"><img src="{{$video['img_url']}}" alt=""></a>
        <a onclick="showModalVideo('{{$video['video_id']}}')"><p class="title {{!(strlen($video['title'])>40)?'':'short'}}">{{str_limit($video['title'],50)}}</p></a>
        </div>
      </div>




    </div>
  </div>

  <div class="sidebar-item">
    <div class="fb-page" data-href="https://www.facebook.com/ProyectoSegundaRepublica/"
     data-small-header="false" data-adapt-container-width="true"
    data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/ProyectoSegundaRepublica/"
    class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ProyectoSegundaRepublica/">
      Proyecto Segunda República</a></blockquote>
    </div>

  </div>

  <div class="sidebar-item">
    <img class="sidebar" src="/img/sidebar/contactateconpsr.jpg" alt="">
  </div>
  <div class="">
    <img class="sidebar" src="/img/test/follow.jpg" alt="">
  </div>

</div>
