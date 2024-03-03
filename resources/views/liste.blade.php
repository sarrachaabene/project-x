<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="container p-3">
   <h1 class="text-center">Liste des categories</h1>
    //ajout d'un message  
   @if($message =Session::get('msg'))
   <div class="alert alert-success">

   {{$message}}
</div>

  
   @endif


   @foreach($categories as $category)

<h1>{{$category->name}}  </h1>
<p>{{$category->description}}</p>

<a class="btn-btn-danger" href="/category/delete/{{$category->id}}">Supprimer</a>
<hr/>


   @endforeach
   </div>

<h1>sarra </h1>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>