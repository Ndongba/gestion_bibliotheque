<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Nombre de Pages</th>
      <th scope="col">Auteur</th>
      <th scope="col">ISBN</th>
      <th scope="col">Editeur</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($livres as $livre)
    <tr>
      <th scope="row">{{$livre->id}}</th>
      <td>{{$livre->titre}}</td>
      <td>{{$livre->date_de_publication}}</td>
      <td>{{$livre->nombre_de_pages}}</td>
      <td>{{$livre->auteur}}</td>
      <td>{{$livre->isbn}}</td>
      <td>{{$livre->editeur}}</td>
      <td>

      </td>
      <td>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>