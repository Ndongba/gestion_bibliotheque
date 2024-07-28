<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des livres</title>
</head>
<body>
    <h1 class="container">Liste des livres</h1>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Categorie</th>
      <th scope="col">Rayons</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($livres as $livre)
            <tr>
                <th scope="row">1</th>
                <td>{{ $livre->titre }}</td>
                <td>{{ $livre->auteur }}</td>
                <td>{{ $livre->categorie->libelle }}</td>
                <td>{{ $livre->rayon->libelle }}</td>
                <td>
                    <a href="{{ url('livres/modifier_livre/'.$livre->id) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ url('livres/supprimer/'.$livre->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
    
   </tbody>
</table>
</div>

</body>
</html>
