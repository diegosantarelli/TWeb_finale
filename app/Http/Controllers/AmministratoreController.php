<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Azienda;


class AmministratoreController extends Controller
{
    public function homeadmin(){
        return view('homeadmin');
    }

    public function insertazienda(){
        $aziende = Azienda::all();
        return view('insertazienda')->with('aziende',$aziende);
    }
}
