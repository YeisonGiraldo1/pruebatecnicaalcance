

@extends('layouts.app')  

@section('content')

<h1 class="text-center">Usuarios</h1>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Nombre de usuario</th>
        <th scope="col">email</th>
     
      </tr>
    </thead>
    <tbody>
    
        
  
        
        @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user['name'] }}</th>
        <td>{{ $user['username'] }}</td>
        <td>{{ $user['email'] }}</td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

  @endsection