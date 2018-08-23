<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenir_medoc extends Model
{
    protected $fillable = ['medicament_id','ordonnance_id'];
    protected $guarded=['id'];
}
