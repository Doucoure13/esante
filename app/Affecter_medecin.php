<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affecter_medecin extends Model
{
    protected $fillable =['medecins_id','secretaires_id'];
    protected $guarded=['id'];
}
