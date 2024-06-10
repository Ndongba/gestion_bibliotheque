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
  <form class="container" action="/sauve_modification/{id}" method="post">

    @csrf
    <h1>Ajouter un livre</h1>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titre</label>
  <input type="text" class="form-control" id="titre" name="titre" required value="{{ $livre->titre}}">
  <div class="mb-3">
 </div>
<div class="mb-3">
  <label for="categorie" class="form-label">Categorie</label>
  <input type="text" class="form-control" name="categorie_id" required value="{{ $livre->categorie}}">
</div>
<div class="mb-3">
  <label for="rayon" class="form-label">Rayon</label>
  <input type="text" class="form-control"  name="rayon" required value="{{ $livre->rayon}}">
</div>
</div>
<div class="mb-3">
  <label for="date_de_publication" class="form-label">Date de publication</label>
  <input type="date" name="date_de_publication" required value="{{ $livre->date_de_publication}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nombre de pages</label>
  <input type="number" name="nombre_de_pages" required value="{{ $livre->nombre_de_pages}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Auteur</label>
  <input type="text" class="form-control" id="auteur" name="auteur" required value="{{ $livre->auteur}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">ISBN</label>
  <input type="text" class="form-control" id="isbn" name="isbn" required value="{{ $livre->isbn}}">
</div>
  <label for="exampleFormControlTextarea1" class="form-label">Editeur</label>
  <input type="text" class="form-control" id="editeur" name="editeur" required value="{{ $livre->editeur}}">
 </div>
 
 
 <button type="submit" class="btn btn-primary">Enregistrer</button>


 </form>


</body>
</html>