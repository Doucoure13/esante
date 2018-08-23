<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitaliser extends Model
{
        protected $fillable = ['patients_id','medecins_id'];
    protected $guarded=['id'];
}
