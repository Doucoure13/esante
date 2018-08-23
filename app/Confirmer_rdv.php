<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmer_rdv extends Model
{
     protected $fillable = ['secretaires_id','medecin_id','date_confirme_rdv'];
    protected $guarded=['id'];
}
