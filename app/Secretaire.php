<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    protected $fillable = ['code_secretaire','nom_secretaire','prenom_secretaire','sexe_secretaire','email_secretaire','date_naiss_secretaire','contact_secretaire','status_secretaire','domicile','photo'];
}
