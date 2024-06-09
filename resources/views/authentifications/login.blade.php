<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    @foreach($errors->all() as $error)

    {{ $error}}

    @endforeach

    <form action="{{ Route('authentification')}}" method="POST" class="container">
    @csrf
    <h1>Se connecter</h1> 
    <div class="mb-3">
        <label for="libelle" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
  
    <div class="mb-3">
        <label for="Description" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</body>
</html>