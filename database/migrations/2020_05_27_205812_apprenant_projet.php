<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApprenantProjet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('apprenant_projet', function(Blueprint $table){
            $table->increments('id_apprenant_projet');
            $table->integer('id_apprenant')->unsigned();
            $table->foreign ('id_apprenant','acteur')->references('id_apprenant')->on('apprenants')->onDelete('cascade');
            $table->integer('id_projet')->unsigned();
            $table->foreign ('id_projet','lien')->references('id_projet')->on('projets')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: drop('apprenant_projet');
    }
}
