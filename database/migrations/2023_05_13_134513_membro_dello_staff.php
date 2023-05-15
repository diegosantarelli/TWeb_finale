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
        Schema::create('Membro_dello_staff', function (Blueprint $table) {
            $table->string('Matricola',25)->primary();
            $table->string('Nome',25);
            $table->string('Cognome',25);
            $table->string('Username',25);
            $table->string('Password',25);
            $table->string('Possibilità_di_Abbinamento',25);
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
