<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Log;
use Illuminate\Support\Facades\Http;  // Importa la clase Http

class PostController extends Controller
{
    public function listpost(){

        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response->json();

     

    Log::create([
        'date' => now(),
        'method' => 'GET',
        'route' => '/posts',
        'returned_data' => json_encode($posts), // Convertir el array a una cadena JSON
    ]);


    return view('posts.index', ['posts' => $posts]);
    }
}
