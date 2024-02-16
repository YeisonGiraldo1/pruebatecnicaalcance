@extends('layouts.app')  

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<h1 class="text-center">Peticiones</h1>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">fecha</th>
        <th scope="col">metodo</th>
        <th scope="col">ruta</th>
        {{-- <th scope="col">datos retornados</th> --}}
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    
        
  
        
        @foreach ($logs as $l)
      <tr>
        <th scope="row">{{$l->date}}</th>
        <td>{{$l->method}}</td>
        <td>{{$l->route}}</td>
        {{-- <td>{{$l->returned_data}}</td> --}}
        <td style="display: flex; gap: 10px;">
          <a class="btn btn-warning" href="/edit/log/{{$l->id}}"><i class="fa-solid fa-pen-to-square"></i></a>

          <form action="{{ route('log.destroy', $l->id) }}" method="POST">
            @csrf
            @method('DELETE')
          <button type="submit"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

  @endsection