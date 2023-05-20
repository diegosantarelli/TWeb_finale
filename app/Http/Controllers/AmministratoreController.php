<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Azienda;
use App\Models\Faq;


class AmministratoreController extends Controller
{
    public function homeadmin(){
        $aziende = Azienda::all();
        return view('homeadmin')->with('aziende',$aziende);
    }

    public function insertazienda(){
        return view('insertazienda');
    }

    public function storeazienda(Request $request){
        $azienda = new Azienda;
        //bisogna controllare tramite form che tutti i campi siano inseriti
        
        $azienda->Nome=$request->input('Nome');
        $azienda->Sede=$request->input('Sede');
        $azienda->Tipologia=$request->input('Tipologia');
        $azienda->RagioneSociale=$request->input('RagioneSociale');
        $azienda->save();
        
        return redirect('amministratore');
        
    }

    /* FAQ-------------------------------------------------------------------------------------------------*/
    public function insertfaq(){
        
        return view('insertfaq');
        

    }


    public function storefaq(Request $request){
        
        $faq = new Faq;
        if (isset($request->Domanda)&&isset($request->Risposta)){
            $faq->Domanda = $request->input('Domanda');
        $faq->Risposta = $request->input('Risposta');
        $faq->save();
        return redirect('faq');
        }
        else{
            return redirect('faq');
        }
        

    }

    public function deletefaq(){
        $faqs = Faq::all();
        return view('deletefaq')->with('faqs',$faqs);
    }

    public function destroyfaq($id){
        Faq::destroy($id);
        return redirect('faq');

    }

    public function modificafaq(){
        $faqs = Faq::all();
        return view('modificafaq')->with('faqs',$faqs);
    }

    public function updatefaq($id){
        $faq=Faq::all()->where('id',$id)->first();
        return view('modify')->with('faq',$faq);
    }
    public function modifyfaq(Request $request, $id){
        $faq = $faq=Faq::all()->where('id',$id)->first();
        $faq->Domanda=$request->input('Domanda');
        $faq->Risposta=$request->input('Risposta');
        $faq->save();
        return redirect('faq');
        
    }
/* FAQ-------------------------------------------------------------------------------------------------*/
}


