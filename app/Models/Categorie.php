<?php

namespace App\Models;

use App\Models\Categorie as ModelsCategorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Categorie extends Model
{
    use HasFactory;
    protected $table='categorie';
    protected $fillable = [
        'nom',
        'image',
        'description',
    ];

    // Relation avec la table annonce
    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
