<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Azienda;
use App\Http\Requests\NewAziendaRequest;

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

    public function deleteazienda(){
        $aziende=Azienda::all();
        return view('deleteazienda')->with('aziende',$aziende);
    }

    public function destroyazienda($id){
        Azienda::destroy($id);
        return redirect('amministratore');
    }

    public function modificaazienda(){
        $aziende=Azienda::all();
        return view('modificaazienda')->with('aziende',$aziende);
    }

    public function updateazienda($id){
        $azienda=Azienda::all()->where('id',$id)->first();
        return view('modifyazienda')->with('azienda',$azienda);
    }

    public function modifyazienda(NewAziendaRequest $request,$id)
    {
        
        $azienda = Azienda::find($id);
        $azienda->Nome=$request->input('Nome');
        $azienda->Sede=$request->input('Sede');
        $azienda->Tipologia=$request->input('Tipologia');
        $azienda->RagioneSociale=$request->input('RagioneSociale');
        $azienda->save();
        return redirect('amministratore');
    }
}
