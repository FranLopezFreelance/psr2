@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
                <a href="/backend/contacts">Contactos</a>
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
                    <th>Nombre</th>
                    <th>Mail</th>
                    <th>Asunto</th>
                    <th></th>
                  </tr>
                  @forelse($contacts as $contact)
                      <tr>
                        <td><a href="/backend/contacts/{{ $contact->id }}">{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>
                          {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $contact->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs pull-right']) !!}
                          {!! Form::close() !!}
                        </td>
                      </tr>
                  @empty
                    - No hay contactos.
                  @endforelse
                </table>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
