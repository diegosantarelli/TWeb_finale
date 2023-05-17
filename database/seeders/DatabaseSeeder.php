<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    

    public function run()
    {
        /*
        DB::table('Faq')->insert([
            [],
            [],
            
        ]);
        
        DB::table('Azienda')->insert([
            ['Nome'=>'prova1','Sede'=>'prova1','Tipologia'=>'prova1','RegioneSociale'=>'prova1'],
            ['Nome'=>'prova2','Sede'=>'prova2','Tipologia'=>'prova2','RegioneSociale'=>'prova2'],
        ]);
         */ 
        DB::table('Offerte')->insert([
            ['Categoria'=>'Animali','Scadenza'=>'20/10/2020','Oggetto'=>'Tiragraffi per gatto','Azienda'=>'prova1','Prezzo'=>12,'PercentualeSconto'=>10,'Luogo'=>'prova1','Modalità'=>'prova1'],
            ['Categoria'=>'Bambini','Scadenza'=>'20/10/2020','Oggetto'=>'Accappatoio','Azienda'=>'prova1','Prezzo'=>12,'PercentualeSconto'=>10,'Luogo'=>'prova1','Modalità'=>'prova1'],
            ['Categoria'=>'Elettronica','Scadenza'=>'20/10/2020','Oggetto'=>'Console PS5','Azienda'=>'prova1','Prezzo'=>12,'PercentualeSconto'=>10,'Luogo'=>'prova1','Modalità'=>'prova1'],
            ['Categoria'=>'Moda','Scadenza'=>'20/10/2020','Oggetto'=>'Vestito','Azienda'=>'prova1','Prezzo'=>12,'PercentualeSconto'=>10,'Luogo'=>'prova1','Modalità'=>'prova1'],
            ['Categoria'=>'Salute','Scadenza'=>'20/10/2020','Oggetto'=>'Scarpe da running','Azienda'=>'prova1','Prezzo'=>12,'PercentualeSconto'=>10,'Luogo'=>'prova1','Modalità'=>'prova1'],
            ['Categoria'=>'Intrattenimento','Scadenza'=>'20/10/2020','Oggetto'=>'supa','Azienda'=>'prova1','Prezzo'=>12,'PercentualeSconto'=>10,'Luogo'=>'prova1','Modalità'=>'prova1'],
        ]);

        
    }
}
