<?php

namespace App\Models;

use App\Models\Offerta;

class Catalog {

    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati

    public function getCat() {
        $categorie = Offerta::all()->pluck('Categoria')->unique();
        return $categorie;
    }

    public function getAll() {
        $offerte = Offerta::paginate(4);
        return $offerte;
    }



    public function getOffByCat($Categoria, $paged = 10) {

        $offerte = Offerta::where('Categoria', $Categoria);
                
    
        
        return $offerte->paginate($paged);
    }

    public function getOffByOgg($Categoria, $paged = 10) {

        $offerte = Offerta::where('Categoria', $Categoria);
                
    
        
        return $offerte->paginate($paged);
    }



}
