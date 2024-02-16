@extends('layouts.app')

@section('content')
    <h1>Álbumes de Usuarios</h1>
  




    @foreach($allAlbums as $userId => $albums)
        <h2>Álbumes del Usuario {{ $userId }}</h2>
        <ul>
            @foreach($albums as $album)
                <li>{{ $album['title'] }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection
