<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
   	protected $fillable = ['code_medecin','nom_medecin','prenom_medecin','sexe_medecin','email_medecin','date_naiss_medecin','specialite_medecin','contact_medecin','status_medecin','domicile','photo'];
} 
 