<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_projets', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_client');
            $table->string('prenom_client');
            $table->double('montant');
            $table->string('tel');
            $table->date('date');
            $table->integer("projet_id")->nullable();
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
        Schema::dropIfExists('client_projets');
    }
}
