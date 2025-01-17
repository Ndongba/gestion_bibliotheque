<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajout livre</title>
</head>
<body>

  @if(session('status'))
  <div class="alert alert-sucess">
    {{session('status')}}
  </div>
  @endif
  <form class="container" action="traitement_livre" method="post">
    @csrf
    <h1>Ajouter un livre</h1>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titre</label>
  <input type="text" class="form-control" id="titre" name="titre" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Image</label>
  <input type="text" class="form-control" id="image" name="url_image" required>
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
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Date de publication</label>
  <input type="date" name="date_de_publication" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nombre de pages</label>
  <input type="number" name="nombre_de_pages" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Auteur</label>
  <input type="text" class="form-control" id="auteur" name="auteur" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">ISBN</label>
  <input type="text" class="form-control" id="isbn" name="isbn" required>
</div>
  <label for="exampleFormControlTextarea1" class="form-label">Editeur</label>
  <input type="text" class="form-control" id="editeur" name="editeur" required>
 </div>
 
 
 <button type="submit" class="btn btn-primary">Enregistrer</button>


 </form>


</body>
</html>