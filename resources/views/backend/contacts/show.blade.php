@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>{{ $contact->name }}</h4>
                </div>
                <div class="panel-body">
                  @if(isset($message))
                      <div class="alert alert-success message">
                          <h5>{{ $message }}</h5>
                      </div>
                  @endif

                  <h4><b>E-mail:</b> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></h4>
                  <h4><b>Tema:</b> {{ $contact->subject }}</h4>
                  <h4><b>Mensaje:</b> </h4>
                    <p class="mensaje">{{ $contact->message }}</p>

                  <br />

                  <a href="/backend/contacts" class="btn btn-primary">Volver</a>

                  {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $contact->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Eliminar', ['class' => 'btn btn-danger pull-right']) !!}
                  {!! Form::close() !!}

                  <hr />

                  @if($contact->response()->count() > 0)
                  <h4><b>Respuesta:</b> </h4>
                    <p class="mensaje">{{ $contact->response()->first()->text }}</p>
                    <hr />
                    <p class="mensaje"><b>Fecha: </b>{{ date("d-m-Y" , strtotime($contact->response()->first()->created_at)) }}</p>
                    <p class="mensaje"><b>Usuario: </b>{{ $contact->response()->first()->user->name }}</p>
                  @else
                    <form class="form-horizontal" role="form" method="POST" action="/backend/response/{{ $contact->id }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                          <label for="text" class="col-md-1 control-label">Respuesta</label>

                          <div class="col-md-11">
                              <textarea rows="4" id="text" class="form-control" name="text" required/>{{ old('text') }}</textarea>
                              @if ($errors->has('text'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('text') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-11 col-md-offset-1">
                              <button type="submit" class="btn btn-success">
                                  Enviar
                              </button>
                          </div>
                      </div>
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                      <input type="hidden" name="contact_id" value="{{ $contact->id }}" />
                    </form>
                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
