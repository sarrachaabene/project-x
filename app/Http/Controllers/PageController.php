<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PageController extends Controller {
    public function afficherPage3() {
          
        return view('page3');
    }


      public function donnes() {
        $name="Ahmed"; 
        $age=20;
        $names=["ahmed","ali","khalil"];
  return view('donnes.index')->with('name' ,$name)->with('age',$age)->with('names',$names);
}
}