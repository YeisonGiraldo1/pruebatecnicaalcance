@extends('layouts.app')  

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('log.update' , $log->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Esto es necesario para indicar que es una solicitud PUT --}}
        <div class="container">
        <h1 class="text-center">Editar Log</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Fecha</label>
          <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$log->date}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">METODO</label>
          <input type="text" name="method" class="form-control" id="exampleInputPassword1" value="{{$log->method}}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">ruta</label>
            <input type="text" name="route" class="form-control" id="exampleInputPassword1" value="{{$log->route}}">
          </div>
       
        <button type="submit" class="btn btn-primary">eidtar</button>
      </form>
    </div>
</body>
</html>

@endsection