<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Rayon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <form class="container" action="{{ url('rayons/sauve_rayon/'.$rayon->id) }}" method="POST">
    @csrf
    <h1>Ajouter un Rayon</h1>
<div class="mb-3">
            <label for="libelle" class="form-label">Libelle</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $rayon->libelle}}">
</div>
  
<div class="mb-3">
  <label for="Description" class="form-label">Partie</label>
  <input type="text" class="form-control" id="description" name="partie" value="{{ $rayon->partie}}">
</div>

<div class="mb-3">
  <label for="Description" class="form-label">Status</label>
  <select name="status" id="">
    <option value="disponible">Disponible</option>
    <option value="pas_disponible">Pas disponible</option>
  </select>
</div>


<button type="submit" class="btn btn-primary">Enregistrer</button>
</form> 
</body>
</html>