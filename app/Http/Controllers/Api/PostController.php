<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return response()->json([
          'status'=>true,
          'posts'=>$posts
           
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->image));
            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imageName,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Post Created successfully',
                'post' => $post
            ], 201);
        } else {
            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Post Created successfully',
                'post' => $post
            ], 201);
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
