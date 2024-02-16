<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Log;
use Illuminate\Support\Facades\Http;  // Importa la clase Http

class UserController extends Controller
{
    public function listusers(){

        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();

         // Procesar la respuesta y devolver los datos
   

    // Registrar la petición en la base de datos (log)
    Log::create([
        'date' => now(),
        'method' => 'GET',
        'route' => '/users',
        'returned_data' => json_encode($users), // Convertir el array a una cadena JSON
    ]);


    return view('users.index', ['users' => $users]);
    }
}
