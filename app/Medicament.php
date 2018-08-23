<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable = ['nom_medidament','qte_medicament'];
    protected $guarded=['id'];
}
