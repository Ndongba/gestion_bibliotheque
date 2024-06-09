<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    </tr>
    @endforeach
  </tbody>
</table>



<a href="#" onclick="document.getElementById('logout-form').submit()">
  <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
    Se deconnecter

</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>