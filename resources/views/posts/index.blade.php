@extends('layouts.app')  

@section('content')

<h1 class="text-center">Publicaciones</h1>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Titulo</th>
        <th scope="col">Cuerpo</th>
       
     
      </tr>
    </thead>
    <tbody>
    
        
  
        
        @foreach($posts as $post)
      <tr>
        <th scope="row">{{ $post['title'] }}</th>
        <td>{{ $post['body'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

  @endsection