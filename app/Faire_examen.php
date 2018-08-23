<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faire_examen extends Model
{
        protected $fillable = ['medecins_id','examens_id'];
    protected $guarded=['id'];
}
