<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Azienda;


class AmministratoreController extends Controller
{
    public function homeadmin(){
        $aziende = Azienda::all();
        return view('homeadmin')->with('aziende',$aziende);
    }

    public function insertazienda(){
        return view('insertazienda');
    }

    public function storeazienda(NewAziendaRequest $request){
        $azienda = new Azienda;
        //bisogna controllare tramite form che tutti i campi siano inseriti
        
        $azienda->Nome=$request->input('Nome');
        $azienda->Sede=$request->input('Sede');
        $azienda->Tipologia=$request->input('Tipologia');
        $azienda->RagioneSociale=$request->input('RagioneSociale');
        $azienda->save();
        
        return redirect('amministratore');
        
    }
}
