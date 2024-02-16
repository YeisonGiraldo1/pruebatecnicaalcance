<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  // Importa la clase Http
use App\Models\Log;
class AlbumController extends Controller
{
    public function consultalbumsuser($userId)
    {
           
        $allAlbums = [];

    for ($userId = 1; $userId <= 10; $userId++) {
        // Realizar la solicitud HTTP GET a la API externa
        $response = Http::get("https://jsonplaceholder.typicode.com/albums?userId=$userId");

        // Procesar la respuesta y devolver los datos
        $albums = $response->json();
    

    // Registrar la petición en la base de datos (log)
    Log::create([
        'date' => now(),
        'method' => 'GET',
        'route' => "/albums?userId=$userId",
        'returned_data' =>json_encode($albums),
    ]);

     // Agregar los álbumes al arreglo general
     $allAlbums[$userId] = $albums;

    return view('albums.index', ['allAlbums' => $allAlbums]);

}
}
}