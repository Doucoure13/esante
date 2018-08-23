<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivrer_certi extends Model
{
    protected $fillable = ['medecins_id','certi_id'];
    protected $guarded=['id'];
}
