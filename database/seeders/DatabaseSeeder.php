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
         

        DB::table('Offerte')->insert([
            ['Categoria'=>'Animali', 'DescrizioneOfferta'=> '...', 'Scadenza'=>'20/10/2020','Oggetto'=>'Tiragraffi per gatto','Azienda'=>'Angelini','Prezzo'=>160,'PercentualeSconto'=>'10','Luogo'=>'Negozio fisico','Modalità'=>'Utilizzo online', 'PrezzoScontato'=>100, 'Evidenza'=>'no'],
            ['Categoria'=>'Bambini','DescrizioneOfferta'=> '...','Scadenza'=>'20/10/2020','Oggetto'=>'Accappatoio','Azienda'=>'Angelini','Prezzo'=>150,'PercentualeSconto'=>'20','Luogo'=>'Sito web','Modalità'=>'Utilizzo in negozio', 'PrezzoScontato'=>100, 'Evidenza'=>'sì'],
            ['Categoria'=>'Elettronica','DescrizioneOfferta'=> '...','Scadenza'=>'20/10/2020','Oggetto'=>'Console PS5','Azienda'=>'Angelini','Prezzo'=>120,'PercentualeSconto'=>'30','Luogo'=>'Applicazione mobile','Modalità'=>'Utilizzo tramite codice', 'PrezzoScontato'=>100, 'Evidenza'=>'no'],
            ['Categoria'=>'Moda','DescrizioneOfferta'=> '...','Scadenza'=>'20/10/2020','Oggetto'=>'Vestito','Azienda'=>'Angelini','Prezzo'=>1200,'PercentualeSconto'=>'40','Luogo'=>'Negozio fisico','Modalità'=>'Utilizzo una sola volta', 'PrezzoScontato'=>100, 'Evidenza'=>'no'],
            ['Categoria'=>'Salute','DescrizioneOfferta'=> '...','Scadenza'=>'20/10/2020','Oggetto'=>'Scarpe da running','Azienda'=>'Angelini','Prezzo'=>1400,'PercentualeSconto'=>'50','Luogo'=>'Telefono o chiamata','Modalità'=>'Utilizzo limitato nel tempo', 'PrezzoScontato'=>100, 'Evidenza'=>'sì'],
            ['Categoria'=>'Intrattenimento','DescrizioneOfferta'=> '...','Scadenza'=>'20/10/2020','Oggetto'=>'Proiettore 4k','Azienda'=>'Angelini','Prezzo'=>1230,'PercentualeSconto'=>'60','Luogo'=>'Evento','Modalità'=>'Utilizzo online', 'PrezzoScontato'=>100, 'Evidenza'=>'sì'],
        ]);*/
        DB::table('Faqs')->insert([
            ['Domanda'=>'come stai?','Risposta'=>'bene'],
            ['Domanda'=>'prova','Risposta'=>'prova'],
        ]);

        
    }
}
