<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_medecin',15);
            $table->string('nom_medecin',20);
            $table->string('prenom_medecin',100);
            $table->string('sexe_medecin');
            $table->string('email_medecin');
            $table->date('date_naiss_medecin');
            $table->string('specialite_medecin');
            $table->bigInteger('contact_medecin')->nullable();
            $table->string('domicile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}
