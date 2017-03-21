<nav class="navbar navbar-default main-menu container-fluid">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img class="logo" src="/img/logo.png" alt="" /></a>
        <a class="visible-xs nohover mobile-seach" data-toggle="modal" data-target="#search-modal" ><i class="material-icons">search</i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">


        @foreach($sections as $section)
            @if($section->topnav != 1)@continue
            @elseif($section->getSubSections())
            <li class="dropdown hidden-xs {{ $target->parent && $target->parent->url === $section->url ? "active" : "" }}" >
              <a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">{{$section->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu" >
                @foreach($section->getSubSections() as $subsection)
                  @if($subsection->topnav != 0)<li class="{{ $target->url === $subsection->url ? "active" : "" }}"><a href="{{$subsection->getFullUrl()}}">{{$subsection->name}}</a></li>@endif
                @endforeach
              </ul>
            </li>
            <li class="dropdown visible-xs">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$section->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu" >
                @foreach($section->getSubSections() as $subsection)
                @if($subsection->topnav != 0)<li><a href="{{$subsection->getFullUrl()}}">{{$subsection->name}}</a></li>@endif
                @endforeach
              </ul>
            </li>
          @else
          <li class="{{ $target->url === $section->url ? "active" : "" }}"><a href="/{{$section->url}}" >{{$section->name}}</a></li>
          @endif

        @endforeach
        <a class="hidden-xs nohover" data-toggle="modal" data-target="#search-modal"><i class="material-icons">search</i></a>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="site-content">
