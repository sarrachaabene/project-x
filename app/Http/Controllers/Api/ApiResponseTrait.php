<?php
namespace App\Http\Controllers\Api; // Déplacez le namespace au début du fichier

use App\Http\Controllers\Controller; // Importez le contrôleur de base
use Illuminate\Http\Request;
use App\Models\Post;
Trait ApiResponseTrait
{

  public function apiResponse($data=null,$message=null,$status=null){
    $array= [
      'data'=>$data,
      'message'=>$message,
      'status'=>$status,
    ];  
    return response( $array,$status);
  }
}