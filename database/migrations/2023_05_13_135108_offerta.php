<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Offerte', function (Blueprint $table) {
            $table->bigIncrements('IdOfferta');
            $table->string('Categoria',25);
            $table->string('Scadenza',25);
            $table->string('Oggetto',25);
            $table->string('Azienda',25);
            $table->float('Prezzo')->unsigned();
            $table->tinyInteger('PercentualeSconto')->unsigned();
            $table->string('Luogo',25);
            $table->string('Modalità',25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Offerte');
    }
};
