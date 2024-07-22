<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rayon extends Model
{
    use HasFactory; 

    protected $fillable=[
        'libelle',
        'partie',
        'status',
    ];

    // Permet de recuperer le rayon du livre
    public function livre():HasMany
    {
        return $this->HasMany(Livre::class);
    }




}




