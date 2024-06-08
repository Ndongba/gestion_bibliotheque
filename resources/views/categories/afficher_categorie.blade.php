<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="">Modifier</a>
      </td>
      <td>
        <a href="supprimer/{{ $categorie->id}}">Supprimer</a>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>