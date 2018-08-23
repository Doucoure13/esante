<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $fillable =['no_chambre','batiments']
    protected $guarded=['id'];
}
