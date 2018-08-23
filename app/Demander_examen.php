<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demander_examen extends Model
{
    protected $fillable = ['secretaires_id','patients_id','date_examen'];
    protected $guarded=['id'];
}
