<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $fillable=[
        'prenom',
        'nom',
        'classe',
    ];
}
