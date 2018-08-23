<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demander_rdv extends Model
{
    protected $fillable = ['patients_id','secretaires_id','date_dmd_rdv'];
    protected $guarded=['id'];
}
