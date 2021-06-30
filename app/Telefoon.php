<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefoon extends Model
{
    protected $fillable = [

        'model',

        'fabrikant',

        'geheugen',

        'prijs'

    ];
}
