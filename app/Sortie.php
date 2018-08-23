<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    protected $fillable = ['medecins_id','examens_id','patients_id','date_sortie','heure_sortie'];
    protected $guarded=['id'];
}
