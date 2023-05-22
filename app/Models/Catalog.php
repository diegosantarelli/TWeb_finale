<?php

namespace App\Models;

use App\Models\Offerta;

class Catalog {

    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getOffByCat($Categoria, $paged = 10) {

        $offerte = Offerta::where('Categoria', $Categoria);
                
    
        
        return $offerte->paginate($paged);
    }

}
