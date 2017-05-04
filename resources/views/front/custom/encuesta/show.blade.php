<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('front.layouts.assets.social-meta')
    <!-- Bootstrap -->
    <link href="/css/front/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css"  href="/css/front/extra.slider.css" >
    <link rel="stylesheet" type="text/css"  href="/css/front/thestyle.min.css?v={{str_random(40)}}" >



    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="site">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="/backend/polls">
                          {{ csrf_field() }}


                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Nombre</label>
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control title" name="name" value="{{ old('name') }}" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                              <label for="lastname" class="col-md-4 control-label">Apellido</label>
                              <div class="col-md-6">
                                  <input id="lastname" type="text" class="form-control title" name="lastname" value="{{ old('lastname') }}" required autofocus>
                                  @if ($errors->has('lastname'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('lastname') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                              <label for="country_id" class="col-md-4 control-label">País</label>
                              <div class="col-md-6">
                                  <select class="form-control sel-countries" name="country_id" required>
                                      @forelse($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                      @empty
                                        <option value="0">No hay conexión a la base</option>
                                      @endforelse
                                  </select>

                                  @if ($errors->has('country_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('country_id') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('province_id') ? ' has-error' : '' }}  sel-provinces">
                              <label for="province_id" class="col-md-4 control-label">Provincia</label>
                              <div class="col-md-6">
                                  <select class="form-control" name="province_id" required>
                                    <option value="0">Elegir...</option>
                                      @forelse($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                      @empty
                                        <option value="0">No hay conexión a la base</option>
                                      @endforelse
                                  </select>

                                  @if ($errors->has('province_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('province_id') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                              <label for="city" class="col-md-4 control-label">Ciudad / Localidad / Barrio</label>
                              <div class="col-md-6">
                                  <input id="city" type="text" class="form-control title" name="city" value="{{ old('city') }}" required autofocus>
                                  @if ($errors->has('city'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('city') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                              <label for="sex" class="col-md-4 control-label">Sexo</label>
                              <div class="col-md-6">
                                  <select class="form-control" name="sex" required>
                                    <option value="0">Elegir...</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                              <label for="age" class="col-md-4 control-label">Edad</label>
                              <div class="col-md-6">
                                  <input id="age" type="number" class="form-control title" name="age" value="{{ old('age') }}" required autofocus>
                                  @if ($errors->has('age'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('age') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                              <label for="occupation" class="col-md-4 control-label">Ocupación</label>
                              <div class="col-md-6">
                                  <input id="occupation" type="text" class="form-control" name="occupation" value="{{ old('occupation') }}" required autofocus>
                                  @if ($errors->has('occupation'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('occupation') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('studies') ? ' has-error' : '' }}">
                              <label for="studies" class="col-md-4 control-label">Estudios</label>
                              <div class="col-md-6">
                                  <input id="studies" type="text" class="form-control title" name="studies" value="{{ old('studies') }}" required autofocus>
                                  @if ($errors->has('studies'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('studies') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail</label>
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control title" name="email" value="{{ old('email') }}" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                              <label for="telephone" class="col-md-4 control-label">Teléfono</label>
                              <div class="col-md-6">
                                  <input id="telephone" type="text" class="form-control title" name="telephone" value="{{ old('telephone') }}" required autofocus>
                                  @if ($errors->has('telephone'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('telephone') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                              <label for="comments" class="col-md-4 control-label">Comentarios</label>

                              <div class="col-md-6">
                                  <textarea rows="4" id="comments" class="form-control" name="comments" required/>{{ old('comments') }}</textarea>
                                  @if ($errors->has('comments'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('comments') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Enviar
                                  </button>
                              </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="/js/front/jquery-2.2.0.min.js"></script>
    <script src="/js/front/bootstrap.js"></script>
    <script type="text/javascript" src="/js/front/home.js?v={{str_random(40)}}"></script>


    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89166996-1', 'auto');
      ga('send', 'pageview');

    </script>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1698679477089861";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    </body>
    </html>
