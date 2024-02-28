<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function AddCategory(Request $request){
      $request->validate(
        ['nom'=>'required',
        'description'=>'required'
        ]
      );
      //affichage request
  //dd($request->nom);
      //traitement d'ajout
    $c=  new Category();
    $c->name=$request->nom;
    $c->description=$request->description;

    if($c->save()) {
      return redirect('/category/list')->with('msg','votre categorie ajoutee avec succes'); ; 
    }
    
   else {
    return 'erreur d`\ajout ';
   }
    }
    //permet d'afficher la page html form.blade.php
    public function ShowFormCategory(){
      return view('donnes.form');
    }
      //liste qui permet d'afficher la liste des categories
    public function liste(){
      //recuperer les categoories de la base de donnes
      $categories=Category::all();
    
       return view('liste')->with('categories',$categories);

    }
    public function delete($id)
    {
$categorie=Category::find($id);
if($categorie->delete()){

  return redirect('/category/list')->with('msg','votre categorie supprimee avec succes'); 
}

else {
return 'erreur d`\ajout ';
}

}
}
