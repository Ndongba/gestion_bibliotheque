<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/style.css')}}">
    <title>Detail Livre</title>
</head>
<body>
    <h1 id="h1">Detail du livre: {{ $livre->titre}}</h1>
    <div class="container">
<div class="card mb-3" style="max-width: 1000px;" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $livre->url_image}}" class="img-fluid rounded-start" alt="..." style="width :100%; height:0 auto">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="font-size:2em" ;>
        <h5 class="card-title" style="font-size:1em";><strong>Titre : </strong>{{ $livre->titre }}</h5>
        <p class="card-text"> <strong>Auteur: </strong>{{ $livre->auteur }}</p>
        <p class="card-text"><strong>Categorie: </strong>{{ $livre->categorie->libelle}}</p>
        <p class="card-text"><strong>Rayon: </strong>{{ $livre->Rayon->libelle }}</p>
       <p class="card-text"><strong>Date de publication: </strong>{{ $livre->date_de_publication }}</p>
       <p class="card-text"><strong>Nombre de pages: </strong>{{ $livre->nombre_de_pages }}</p>
       <p class="card-text"><strong>ISBN: </strong>{{ $livre->isbn }}</p>
       <p class="card-text"><strong>Editeur: </strong> {{ $livre->editeur }}</p>
    </div>
    </div>
  </div>
</div>
</div>
</body>
</html>