<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enregistrer extends Model
{
    protected $fillable = ['patients_id','secretaires_id','date_enreg'];
    protected $guarded=['id'];
}
