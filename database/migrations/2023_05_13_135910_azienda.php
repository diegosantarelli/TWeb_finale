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
        Schema::create('Azienda', function (Blueprint $table) {
            $table->string('Nome',25)->primary();
            $table->string('Sede',25);
            $table->string('Tipologia',25);
            $table->string('RegioneSociale',25);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
