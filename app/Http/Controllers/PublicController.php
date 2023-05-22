<?php
 
namespace App\Http\Controllers;
 

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Azienda;
use App\Models\Offerta;
use App\Models\Faq;
use App\Models\Catalog;
use Illuminate\Http\Request;
use QrCode;
use App\Models\Catalog;
 
class PublicController extends Controller
{
    /**
     * Show the homepage for a public user.
     */


     protected $_catalogModel;

     public function __construct() {
         $this->_catalogModel = new Catalog;
     }



    public function showHome(): View
    {
        $offerteInEvidenza = Offerta::where('Evidenza', 'sì')->get();
        return view('home', ['offerte' => $offerteInEvidenza]);
    }
    
    /**
     * Show catalog page for a public user.
     */
    
  /*  public function showCatalog($Categoria = null): View {
        $categorie = Offerta::all()->pluck('Categoria')->unique();
        if (isset($Categoria)){
            $offerte = Offerta::all()->where('Categoria',$Categoria);
            
        } else {
        $offerte = Offerta::all();
        
        }
        
            return view('catalogo')->with('offerte', $offerte)->with('categorie',$categorie)->with('catselezionata', $Categoria);
        

        
        
        
    } */

    public function showCatalog($Categoria='Animali'): View {
        $offerte = $this->_catalogModel->getOffByCat($Categoria);
        return view('catalog')->with('offerte',$offerte);
        

        
        
        
    } 


    public function showAziende()
    {
        $aziende = Azienda::all();
        
        return view('aziende', compact('aziende'));
    }

    public function showSingleAzienda($id): View
    {
        $selAzienda = Azienda::all()->where('id', $id)->first();
    
        return view('paginaazienda')->with('selAzienda',$selAzienda);
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


    public function showStampaCoupon(): View{
        return view('stampacoupon');
    }

    public function generateQrCode()
    {
        $data = "Dati da codificare nel codice QR";
        $qrCode = QrCode::size(300)->generate($data);

        return view('stampacoupon', compact('qrCode'));
    }

    public function paginate_index()
    {
        $offerta_pagin = Catalog::paginate(10); // Ottieni le offerte paginate, 10 per pagina

        return view('catalogo', compact('offerta_pagin'));
    }
}
