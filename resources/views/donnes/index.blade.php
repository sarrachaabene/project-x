<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Contenu page index</h1>

  <h3>{{ $name }}</h3>
  <h3>{{$age}}</h3>

@foreach( $names as $name)
<div>  
Le nom est : {{ $name }}
<hr/>
</div>

@endforeach
</body>
</html>