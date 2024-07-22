<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Ajout livre</title>
</head>
<body>

  @if(session('status'))
  <div class="alert alert-sucess">
    {{session('status')}}
  </div>
  @endif
  <form class="container" action="{{ url('livres/sauve_livre/'.$livre->id) }}" method="post">
  @csrf
  
    <h1>Modifier le livre</h1>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titre</label>
  <input type="text" class="form-control" id="titre" name="titre" value="{{ $livre->titre}}" required>
  <div class="mb-3">
 </div>
 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Image</label>
  <input type="text" class="form-control" id="image" name="url_image" value="{{ $livre->url_image}}">
</div>
<div class="mb-3">
  <label for="categorie_id" class="form-label">Categorie</label>
 <select name="categorie_id">
  @foreach($categories as $categorie)
  <option value="{{ $categorie->id}}">{{ $categorie->libelle}}</option>
  @endforeach
  </select>
</div>
<div class="mb-3">
  <label for="rayon_id" class="form-label">Rayon</label>
  <select name="rayon_id">
  @foreach($rayons as $rayon)
  <option value="{{ $rayon->id}}">{{ $rayon->libelle}}</option>
  @endforeach
  </select>
</div>
</div>
<div class="mb-3">
  <label for="date_de_publication" class="form-label">Date de publication</label>
  <input type="date" name="date_de_publication" value="{{ $livre->date_de_publication}}" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nombre de pages</label>
  <input type="number" name="nombre_de_pages" value="{{ $livre->nombre_de_pages}}" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Auteur</label>
  <input type="text" class="form-control" id="auteur" name="auteur" value="{{ $livre->auteur}}" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">ISBN</label>
  <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $livre->isbn}}" required>
</div>
  <label for="exampleFormControlTextarea1" class="form-label">Editeur</label>
  <input type="text" class="form-control" id="editeur" name="editeur" value="{{ $livre->editeur}}" required>
 </div>
 
   
<button type="submit" class="btn btn-primary" id="update_livre">Enregister</button>

 </form>


</body>
</html>