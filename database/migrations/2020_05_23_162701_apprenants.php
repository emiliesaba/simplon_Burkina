<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apprenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema:: create('apprenants', function(Blueprint $table){
        $table->increments('id');
        $table->text('nom');
        $table->text('prenom');
        $table->text('date_naiss');
        $table->text('ville_origine');
        $table->text('formation');
        $table->timestamps();
        $table->integer('contact')->unsigned();
        $table->text('photo');
    });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema:: drop('apprenants');
    }
}
