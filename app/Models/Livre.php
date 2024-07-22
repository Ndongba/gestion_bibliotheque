<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livre extends Model
{
    use HasFactory;

   protected $fillable=[
            'titre',
            'url_image',
            'categorie_id',
            'rayon_id',
            'date_de_publication',
            'nombre_de_pages',
            'auteur' ,
            'isbn',
            'editeur',
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function rayon():BelongsTo
    {
        return $this->belongsTo(Rayon::class);
    }
}



           
