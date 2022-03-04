<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="cards">
    
      @foreach ($lista_movies; as $movie)
      <div class="card">
        <ul>   
            <li><span>Titolo:</span>  {{$movie->title}}</li>
            <li><span>Titolo Originale:</span> {{$movie->original_title}}</li>
            <li><span>Lingua:</span> {{$movie->nationality}}</li>
            <li><span>Voto:</span> {{$movie->vote}}</li>
        </ul>
      </div>
      @endforeach
    
  </div>
  
</body>
</html>