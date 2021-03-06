<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumini extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('alumnis', function(Blueprint $table){
            $table->increments('id_alumini');
            $table->integer('id_apprenant')->unsigned();
            $table->foreign ('id_apprenant','apprenant')->references('id')->on('apprenants')->onDelete('cascade');
            $table->text('promotion');
            $table->text('fonction');
            $table->timestamps();
            $table->text('entreprise_actuel');
            $table->integer('contact')->unsigned();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: drop('aluminis');
    }
}
