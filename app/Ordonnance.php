<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $fillable = ['medecins_id','patients_id','description'];
    protected $guarded=['id'];
}
