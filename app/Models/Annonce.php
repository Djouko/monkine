<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Modèle pour la table annonce
class Annonce extends Model
{
    use HasFactory;
    protected $table='annonce';


    protected $fillable = [
        'titre',
        'description',
        'fichier',
        'prix',
        'date_annonce',
        'user_id',
        'categorie_id',
    ];

    // Relation avec la table user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec la table categorie
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
