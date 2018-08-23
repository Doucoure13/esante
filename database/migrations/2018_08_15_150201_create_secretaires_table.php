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
            $table->string('nom_secretaire');
            $table->string('prenom_secretaire');
            $table->string('sexe_secretaire');
            $table->string('fonction_secretaire');
            $table->string('contact_secretaire');
            $table->string('mail_secretaire');
            $table->string('date_de_naissance_secretaire');
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
