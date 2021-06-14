<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Etudiant', function (Blueprint $table) {
            $table->id('idEtudiant');
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail');
            $table->unsignedBigInteger('convention');
            $table->timestamps();
        });

        Schema::table('Etudiant', function (Blueprint $table) {
            $table->foreign('convention')->references('idConvention')->on('Convention');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Etudiant');
    }
}
