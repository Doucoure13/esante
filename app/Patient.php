<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['nom_patient','prenom_patient','sexe_patient','contact_patients','date_de_naissance_patients','domicile_patient','mail_patients'];
    protected $guarded=['id'];
}
