<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmerRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmer_rdvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('secretaires_id')->index();
            $table->integer('medecins-id')->index();
            $table->string('date_confirme_rdv');
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
        Schema::dropIfExists('confirmer_rdvs');
    }
}
