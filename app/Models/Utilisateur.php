<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Utilisateur extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom_ut',
        'prenom_ut',
        'email_ut',
        'num_tel',
        'motDepasse',
        'role',
    ];
}


