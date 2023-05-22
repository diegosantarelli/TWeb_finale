<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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


        DB::table('Offerte')->insert([
            ['Categoria'=>'Animali',
            'DescrizioneOfferta'=> '...',
            'Scadenza'=>'20/10/2024',
            'Oggetto'=>'Tiragraffi per gatto',
            'Azienda'=>'Angelini',
            'Prezzo'=>160,
            'PercentualeSconto'=>'10',
            'Luogo'=>'Negozio fisico',
            'Modalità'=>'Utilizzo online',
            'Evidenza'=>'no',
            'image' => 'Tiragraffi.png'],

            ['Categoria'=>'Elettronica',
             'DescrizioneOfferta'=> '...',
             'Scadenza'=>'20/10/2025',
             'Oggetto'=>'Ipad 5',
             'Azienda'=>'Apple',
             'Prezzo'=>1200,
             'PercentualeSconto'=>'40',
             'Luogo'=>'Negozio fisico',
             'Modalità'=>'Utilizzo una sola volta',
             'Evidenza'=>'no',
             'image' => 'ipad2022.png'],

            ['Categoria'=>'Elettronica',
             'DescrizioneOfferta'=> '...',
             'Scadenza'=>'20/10/2020',
             'Oggetto'=>'Iphone 13',
             'Azienda'=>'Apple',
             'Prezzo'=>1400,
             'PercentualeSconto'=>'50',
             'Luogo'=>'Telefono o chiamata',
             'Modalità'=>'Utilizzo limitato nel tempo',
             'Evidenza'=>'sì',
             'image' =>'iphone13.png'],

            ['Categoria'=>'Abbigliamento',
             'DescrizioneOfferta'=> '...',
             'Scadenza'=>'',
             'Oggetto'=>'Air Force 1',
             'Azienda'=>'Nike',
             'Prezzo'=>1230,
             'PercentualeSconto'=>'60',
             'Luogo'=>'Evento',
             'Modalità'=>'Utilizzo online',
            'Evidenza'=>'sì',
            'image' => 'AirForce.png'],
        ]);

        DB::table('Faqs')->insert([
            ['Domanda'=>'come stai?',
            'Risposta'=>'bene'],

            ['Domanda'=>'prova',
            'Risposta'=>'prova'],
        ]);

        DB::table('Users')->insert([
            [
                'cognome' => 'Recinelli',
                'email' => 's@gmail.com',
                'età' => 22,
                'genere' => 'Uomo',
                'role' => 'user',
                'nome' => 'Simone',
                'password' => Hash::make('14'),
                'possibilità_abbinamento' => 0,
                'residenza' => 'Roseto',
                'telefono' => '3409139863',
                'username' => 'simone',
                'id' => ''
            ],
            [
                'cognome' => 'Staff',
                'email' => 'membro@gmail.com',
                'età' => 32,
                'genere' => 'Uomo',
                'role' => 'staff',
                'nome' => 'Membro',
                'password' => Hash::make('14'),
                'possibilità_abbinamento' => 1,
                'residenza' => 'Martinsicuro',
                'telefono' => '3758492345',
                'username' => 'membrostaff',
                'id' => ''
            ],
            [
                'cognome' => 'Admin',
                'email' => 'admin@gmail.com',
                'età' => 42,
                'genere' => 'Uomo',
                'role' => 'admin',
                'nome' => 'Admin',
                'password' => Hash::make('14'),
                'possibilità_abbinamento' => 0,
                'residenza' => 'Ancona',
                'telefono' => '3409139863',
                'username' => 'admin',
                'id' => ''
            ],
            [
                'cognome' => 'Staff',
                'email' => 'membro@gmail.com',
                'età' => 32,
                'genere' => 'Uomo',
                'role' => 'user',
                'nome' => 'Diego',
                'password' => Hash::make('11'),
                'possibilità_abbinamento' => 1,
                'residenza' => 'Martinsicuro',
                'telefono' => '3758492345',
                'username' => 'dieghez',
                'id' => ''
            ]
        ]);


    DB::table('Aziende')->insert([
        [
            'Nome' => 'Nike',
            'Sede' => 'Polverigi',
            'Tipologia' => 'e-commerce',
            'RagioneSociale' => 'jhwfhewg743',
            'image' => 'nike.png',

        ],
        [
            'Nome' => 'Apple',
            'Sede' => 'Polverigi',
            'Tipologia' => 'sport',
            'RagioneSociale' => 'vrt73',
            'image' => 'apple.png',

        ],

        [
            'Nome' => 'Amazon',
            'Sede' => 'Martinsicuro',
            'Tipologia' => 'sport',
            'RagioneSociale' => 'jhwfhewg7453',
            'image' => 'amazon.png',

        ],

        [
            'Nome' => 'Ebay',
            'Sede' => 'Ancona',
            'Tipologia' => 'e-commerce',
            'RagioneSociale' => 'jhwfhewg7487983',
            'image' => '',


        ]


    ]);

    }
}
