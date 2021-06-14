<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Attestation', function (Blueprint $table) {
            $table->id('idAttestation');
            $table->unsignedBigInteger('etudiant');
            $table->unsignedBigInteger('convention');
            $table->text('message');
            $table->timestamps();
        });

        Schema::table('Attestation', function (Blueprint $table) {
            $table->foreign('etudiant')->references('idEtudiant')->on('Etudiant');
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
        Schema::dropIfExists('Attestation');
    }
}
