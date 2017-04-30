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
                <table class="table table-hover">
                  <tr>
                    <th>Nombre y Apellido</th>
                    <th>Ciudad</th>
                    <th>E-Mail</th>
                    <th>Teléfono</th>
                    <th>Contactado</th>
                    <th></th>
                  </tr>
                  @forelse($polls as $poll)
                      <tr>
                        <td><a href="/backend/polls/{{ $poll->id }}">{{ $poll->name }} {{ $poll->lastname }}</td>
                        <td>{{ $poll->city }}</td>
                        <td>{{ $poll->email }}</td>
                        <td>{{ $poll->telephone }}</td>
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
                    <tr>
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
@endsection
