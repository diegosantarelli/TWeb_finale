<?php
 
namespace App\Http\Controllers;
 

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Offerta;
use App\Models\Faq;
use Illuminate\Http\Request;
 
class PublicController extends Controller
{
    /**
     * Show the homepage for a public user.
     */
    public function showHome(): View
    {
        $offerteInEvidenza = Offerta::where('Evidenza', 'sì')->get();
        return view('home', ['offerte' => $offerteInEvidenza]);
    }
    
    /**
     * Show catalog page for a public user.
     */
    
    public function showCatalog($Categoria = null): View {
        $categorie = Offerta::all()->pluck('Categoria')->unique();
        if (isset($Categoria)){
            $offerte = Offerta::all()->where('Categoria',$Categoria);
            
        } else {
        $offerte = Offerta::all();
        
        }
        
            return view('catalogo')->with('offerte', $offerte)->with('categorie',$categorie)->with('catselezionata', $Categoria);
        

        
        
        
    } 
    /*
    public function showCatalog($Categoria = null, $Oggetto = null)
    {
        $categorie = Offerta::all()->pluck('Categoria')->unique();
        
        if (isset($Categoria)) {
            $offerte = Offerta::where('Categoria', $Categoria)->get();
        } else {
            $offerte = Offerta::all();
            $Categoria = null; // Inizializza $Categoria se non è stato fornito alcun valore
        }
        
        return view('catalogo', compact('offerte', 'categorie', 'Categoria'))->with('Categoria', $Categoria);
    }
    

    /**
     * Show faq page for a public user.
     */
    public function showFaq(): View {
        $faqs=Faq::all();
        return view('faq')->with('faqs',$faqs);
    }
    /**
     * Show info page for a public user.
     */
    public function showInfo(): View {
        return view('info');
    }
    /**
     * Show login page for a public user.
     */
    public function showLogin(): View {
        return view('login');
    }
    /**
     * Show coupon page for a public user.
     */
    public function showCoupon($IdOfferta): View {
        $selOfferta = Offerta::all()->where('IdOfferta', $IdOfferta)->first();
        
        return view('coupon')->with('selOfferta',$selOfferta);
    }

    public function showSignIn(): View {
        return view('registrazione');
    }
/*
    public function search(Request $request)
    {
        $query = $request->input('query');
        $keyword = $request->input('keyword');
        
        $offerte = Offerta::query();
        
        if ($query) {
            $offerte->where('Oggetto', 'LIKE', "%$query%");
        }
        
        if ($keyword) {
            $offerte->where('Azienda', 'LIKE', "%$keyword%");
        }
        
        $results = $offerte->get();
        
        return view('catalogo', ['offerte' => $results]);
    }
    */
    public function search(Request $request)
    {
        $oggetto = $request->input('oggetto');
        $azienda = $request->input('azienda');
        
        if(isset($oggetto)&&($azienda==null))
        {
            $results = Offerta::where('Oggetto', 'like', '%' . $oggetto . '%')->get();
        }
        else if(isset($azienda)&&($oggetto==null))
        {
            $results = Offerta::where('Azienda', 'like', '%' . $azienda . '%')->get();
        }

        else if(isset($oggetto)&&(isset($azienda))) {
            $results = Offerta::where('Azienda', 'like', '%' . $azienda . '%')->where('Oggetto', 'like', '%' . $oggetto . '%')->get();
        }
        else{
            $results = Offerta::all();
        }
        

        $categorie = Offerta::all()->pluck('Categoria')->unique();  
        
        return view('catalogo')->with('offerte' , $results)->with('categorie',$categorie);
        
    }
/* AMMINISTRATORE*/
    public function insertfaq(){
        
        return view('insertfaq');
        

    }


    public function storefaq(Request $request){
        
        $faq = new Faq;
        $faq->Domanda = $request->input('Domanda');
        $faq->Risposta = $request->input('Risposta');
        $faq->save();
        return redirect('faq');

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
/* fine parte AMMINISTRATORE*/
  
}