<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Rayons</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Partie</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rayons as $rayon)
    <tr>
      <th scope="row">{{$rayon->id}}</th>
      <td>{{$rayon->libelle}}</td>
      <td>{{$rayon->partie}}</td>
      <td>
        <a href="modifier/{{ $rayon->id}}">Modifier</a>
      </td>
      <td>
        <a href="supprimer/{{ $rayon->id}}">Supprimer</a>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>