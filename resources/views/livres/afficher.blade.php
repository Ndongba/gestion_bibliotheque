<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="rechercher">
    <form action="{{ url('rechercher') }}" method="GET" class="container">
        <input type="text" name="query" placeholder="Rechercher des livres" id="search" >
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>
    </div>
    
        <div class="album py-5 bg-light">
              <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($livres as $livre)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="25%" height="300px" src="{{ $livre->url_image }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{ $livre->titre }}</h4>
                                
                               <strong><p>{{ $livre->categorie->libelle }}</p></strong>   
                               <strong><p>{{ $livre->Rayon->libelle }}</p></strong>  
                                   
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group" id="bouton">
                                        <a href="livres/detail/{{ $livre->id }}">
                                            <button type="button" class="btn btn-sm btn-success">
                                                Détail
                                            </button>
                                        </a>
                                        <a href="livres/modifier_livre/{{ $livre->id}}">
                                            <button type="button" class="btn btn-sm btn-primary">Modifier</button>
                                        </a>
                                        <a href="livres/supprimer/{{ $livre->id }}">
                                            <button type="button" class="btn btn-sm btn-danger">Supprimer</button>
                                        </a>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
                    
        

<a href="login" onclick="document.getElementById('logout-form').submit()" class="btn btn-primary">
    Se deconnecter

</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>