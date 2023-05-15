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
        Schema::create('Amministratore', function (Blueprint $table) {
            $table->bigIncrements('IdAmministratore');
            $table->string('Username',25);
            $table->string('Nome',25);  
            $table->string('Cognome',25); 
            $table->string('Password',25);                    
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
