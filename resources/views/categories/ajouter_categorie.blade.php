<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Categorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <form class="container" action="traitement_categorie" method="POST">
    @csrf
    <h1>Ajouter un Categorie</h1>
<div class="mb-3">
            <label for="libelle" class="form-label">Libelle</label>
            <input type="text" class="form-control" id="libelle" name="libelle">
</div>
  
<div class="mb-3">
  <label for="Description" class="form-label">Description</label>
  <input type="text" class="form-control" id="description" name="description">
</div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</body>
</html>