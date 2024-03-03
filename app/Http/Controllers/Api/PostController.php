<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Api\ApiResponseTrait;


class PostController extends Controller
{   
  use ApiResponseTrait;
    public function index()
    {    
        $posts =PostResource::collection(Post::get()) ;
        return $this->apiResponse($posts, 'ok', 200);
    }
    public function show($id)
    {
      $post=Post::find($id);
      if($post){
        return $this->apiResponse(new PostResource($post), 'ok', 200);
      }
return $this->apiResponse(data:null,message: 'The Post Not Found',status: 404);
    }
    public function store(Request $request)
    {

      $post=Post::creat($request->all());
      if($post){
        return $this->apiResponse(new PostResource($post), 'The post save', 201);
      }
      return $this->apiResponse(data:null,message: 'The Post Not save',status: 400);
    }
}
