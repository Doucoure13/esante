<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prendre_rdv extends Model
{
    protected $fillable = ['medecins_id','patients_id','date_rdv'];
    protected $guarded=['id'];
}
