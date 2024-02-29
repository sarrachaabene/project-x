<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post; // Assurez-vous que le modèle s'appelle "Post" avec une majuscule pour suivre les conventions de nommage de Laravel
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Utilisez la méthode "all()" pour récupérer tous les enregistrements de la table
        $message = ["ok"];
        return response(['posts' => $posts, 'message' => $message], 200); // Utilisez une syntaxe correcte pour retourner la réponse
    }
}
