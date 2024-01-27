<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    // Le nom de la table dans la base de données
    protected $table = 'agents';

    // Les colonnes que vous pouvez remplir lors de la création ou de la mise à jour d'un agent
    protected $fillable = [
        'nom_ut',
        'prenom_ut',
        'email_ut',
        'num_tel',
        // Ajoutez d'autres colonnes selon vos besoins
    ];
}
