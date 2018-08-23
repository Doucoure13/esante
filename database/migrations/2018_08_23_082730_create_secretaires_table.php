<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_secretaire',15);
            $table->string('nom_secretaire',20);
            $table->string('prenom_secretaire',100);
            $table->string('sexe_secretaire');
            $table->string('email_secretaire');
            $table->date('date_naiss_secretaire');
            $table->string('contact_secretaire');
            $table->string('domicile');
            $table->string('photo');
            $table->string('status_secretaire');
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
        Schema::dropIfExists('secretaires');
    }
}
