<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    protected $fillable =['examens_id','patients_id','num_certi']
    protected $guarded=['id'];
}
