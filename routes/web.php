<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
 Route::get('/', function () {
    return view('welcome');
});
Route::get('/page3',[PageController::class , 'afficherPage3']);
Route::get('/affichage/donnees',[PageController::class,'donnes']);
Route::post('/category/add',[CategoryController::class,'AddCategory']);
Route::get('/category/form',[CategoryController::class,'ShowFormCategory']);
Route::get('/category/list',[CategoryController::class,'liste']);
Route::get('/category/delete/{id}',[CategoryController::class,'delete']);

Route::middleware(['auth'])->group(function(){

  Route::ressource(name'posts',controller:PostController::class);
});