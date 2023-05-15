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
        Schema::create('Utenti', function (Blueprint $table) {
            $table->string('Username',25)->primary();
            $table->string('Password',25);
            $table->string('Email',25);
            $table->string('Nome',25);
            $table->string('Cognome',25);
            $table->string('Telefono',25);
            $table->tinyInteger('Possibilità_abbinamento', false, true);
            $table->tinyInteger('Livello')->unsigned();
            $table->string('Genere',25);
            $table->integer('Età')->unsigned()->limit(3);
            $table->string('Residenza',25);
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Utenti');
    }
};
