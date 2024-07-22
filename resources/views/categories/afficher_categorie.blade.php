<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des categories</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">libelle</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $categorie)
    <tr>
      <th scope="row">{{$categorie->id}}</th>
      <td>{{$categorie->libelle}}</td>
      <td>{{$categorie->description}}</td>
      <td>
        <a href="categories/modifier/{{ $categorie->id}}" class="btn btn-primary">Modifier</a>
        <a href="categories/supprimer/{{ $categorie->id}}" class="btn btn-danger">Supprimer</a>
      </td>
      
      </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>