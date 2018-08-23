<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemanderRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demander_rdvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patients_id')->index();
            $table->integer('secretaires_id')->index();
            $table->dateTime('date_dmd_rdv');
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
        Schema::dropIfExists('demander_rdvs');
    }
}
