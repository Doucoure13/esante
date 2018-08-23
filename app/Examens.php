<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examens extends Model
{
        protected $fillable = ['patients_id','type_examen','resultat_examen'];
    protected $guarded=['id'];
}
