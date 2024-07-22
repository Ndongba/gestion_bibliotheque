<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Rayons</title>
</head>
<body>
  <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Partie</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rayons as $rayon)
    <tr>
      <th scope="row">{{ $rayon->id}}</th>
      <td>{{ $rayon->libelle}}</td>
      <td>{{ $rayon->partie}}</td>
      <td>{{ $rayon->status}}</td>
      <td>
        <a href="rayons/modifier_rayon/{{ $rayon->id}}" class="btn btn-primary">Modifier</a>
        <a href="/rayons/supprimer_rayon/{{ $rayon->id}}" class="btn btn-danger">Supprimer</a>
      </td>
      
      </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>