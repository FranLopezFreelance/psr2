@extends('front.layouts.interna')

@section('content')

<h2>PSR EN LAS PROVINCIAS</h2>

<hr />

    @forelse($provinces->where('active', 1) as $province)
      <h4>{{ $province->name }}</h4>

        <p>- <a href="{{ $province->facebook }}" target="blank">Face Provincial</a></p>

        <ul>
          @forelse($province->users->where('active', 1) as $user)
            <li>
              <p><b>{{ $user->zone }}</b></p>
              <p><b>{{ $user->name }}</b></p>
              <p><b>Teléfono:</b> {{ $user->telephone }}</p>
              <p><b>E-Mail:</b> {{ $user->email }}</p>
              <p><b>Facebook:</b> <a href="{{ $user->facebook }}" target="blank">Facebook Personal</a></p>
            </li>
          @empty

          @endforelse
        </ul>

        <hr>
    @empty

    @endforelse

@endsection
