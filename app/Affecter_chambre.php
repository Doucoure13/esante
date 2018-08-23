<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affecter_chambre extends Model
{
    protected $fillable = ['chambres_id','patient_id'];
    protected $guarded=['id'];
}
