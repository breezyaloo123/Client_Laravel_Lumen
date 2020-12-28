<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'numEtudiant','nom','prenom','statut','montantBourse'
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}







?>