@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
                <a href="/backend/polls">Encuestas</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-body">
                @if(isset($message))
                    <div class="alert alert-success message">
                        <h5>{{ $message }}</h5>
                    </div>
                @endif

                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Argentina</a></li>
                    <li role="presentation"><a href="#extranjero" aria-controls="profile" role="tab" data-toggle="tab">Extranjero</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">

                      <div class="form-group{{ $errors->has('province_id') ? ' has-error' : '' }}">
                          <label for="province_id" class="col-md-1 control-label">Provincia</label>
                          <div class="col-md-3">
                              <select class="form-control select-provinces" name="province_id" required>
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

                      <br />

                      <table class="table table-hover polls-table table-ar">
                        <tr>
                          <th>Nombre y Apellido</th>

                          @if(Auth::user()->type_id == 2)
                            <th>Ciudad</th>
                          @else
                            <th>Provincia</th>
                          @endif

                          <th>E-Mail</th>
                          <th>Teléfono</th>
                          <th>Fecha</th>
                          <th>Contactado</th>
                          <th></th>
                        </tr>
                        @forelse($polls as $poll)
                            <tr class="old-polls-ar">
                              <td><a href="/backend/polls/{{ $poll->id }}">{{ $poll->name }} {{ $poll->lastname }}</td>

                              @if(Auth::user()->type_id == 2)
                                <td>{{ $poll->city }}</td>
                              @else
                                @if(isset($poll->province->name))
                                  <td>{{ $poll->province->name }}</td>
                                @else
                                  <td></td>
                                @endif
                              @endif

                              <td>{{ $poll->email }}</td>
                              <td>{{ $poll->telephone }}</td>
                              <td>{{ date("d-m-Y" , strtotime($poll->created_at)) }}</td>
                              @if($poll->contacted == 1)
                                <td>Sí {{ $poll-date_contacted }}</td>
                              @else
                                <td>No</td>
                              @endif
                              <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $poll->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                                {!! Form::close() !!}
                              </td>
                            </tr>
                        @empty
                          <tr class="old-polls-ar">
                            <td colspan="6">
                              @if(isset(Auth::user()->province->id))
                                <h4> No hay contactos por {{ Auth::user()->province->name }} </h4>
                              @else
                                <h4> No hay contactos</h4>
                              @endif
                            </td>
                          </tr>
                        @endforelse
                      </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="extranjero">

                      <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                          <label for="country_id" class="col-md-1 control-label">País</label>
                          <div class="col-md-3">
                              <select class="form-control select-countries" name="country_id" required>
                                  @forelse($countries as $country)
                                    @if($country->id > 1)
                                      <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endif
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

                      <br />

                      <table class="table table-hover polls-table table-ex">
                        <tr>
                          <th>Nombre y Apellido</th>
                          <th>País</th>
                          <th>E-Mail</th>
                          <th>Teléfono</th>
                          <th>Fecha</th>
                          <th>Contactado</th>
                          <th></th>
                        </tr>
                        @forelse($pollsForeign as $poll)
                            <tr class="old-polls-ex">
                              <td><a href="/backend/polls/{{ $poll->id }}">{{ $poll->name }} {{ $poll->lastname }}</td>
                              <td>{{ $poll->country->name }}</td>
                              <td>{{ $poll->email }}</td>
                              <td>{{ $poll->telephone }}</td>
                              <td>{{ date("d-m-Y" , strtotime($poll->created_at)) }}</td>
                              @if($poll->contacted == 1)
                                <td>Sí {{ $poll-date_contacted }}</td>
                              @else
                                <td>No</td>
                              @endif
                              <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $poll->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                                {!! Form::close() !!}
                              </td>
                            </tr>
                        @empty
                          <tr class="old-polls-ex">
                            <td colspan="6">
                              @if(isset(Auth::user()->province->id))
                                <h4> No hay contactos por {{ Auth::user()->province->name }} </h4>
                              @else
                                <h4> No hay contactos</h4>
                              @endif
                            </td>
                          </tr>
                        @endforelse
                      </table>
                    </div>
                  </div>

                </div>


              </div>
          </div>
      </div>
    </div>
</div>
@endsection
