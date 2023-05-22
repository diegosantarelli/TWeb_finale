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
        Schema::create('Users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',25)->unique();
            $table->string('password',255);
            $table->string('email',25);
            $table->string('nome',25);
            $table->string('cognome',25);
            $table->string('telefono',25);
            $table->string('role',10)->default('user');
            $table->tinyInteger('possibilità_abbinamento', false, true)->default(false);
            $table->string('genere',25);
            $table->integer('età')->unsigned()->limit(3);
            $table->string('residenza',25);
            $table->rememberToken();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');

        Schema::table('users', function (Blueprint $table) {
            $table->dropRememberToken();
        });
    }
};
