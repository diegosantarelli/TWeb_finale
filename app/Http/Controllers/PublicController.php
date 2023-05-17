<?php
 
namespace App\Http\Controllers;
 

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Offerta;
use Illuminate\Http\Request;
 
class PublicController extends Controller
{
    /**
     * Show the homepage for a public user.
     */
    public function showHome(): View {
        return view('home');
    }
    /**
     * Show catalog page for a public user.
     */
    public function showCatalog($Categoria = null,$Oggetto = null): View {
        $categorie = Offerta::all()->pluck('Categoria')->unique();
        if (isset($Categoria)){
            $offerte = Offerta::all()->where('Categoria',$Categoria);
            
        } else {
        $offerte = Offerta::all();
        
        }
        
        return view('catalogo')->with('offerte', $offerte)->with('categorie',$categorie);
        
        
    }
    /**
     * Show faq page for a public user.
     */
    public function showFaq(): View {
        return view('faq');
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

    public function showCoupon1(): View {
        return view('coupon');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $results = Offerta::where('Oggetto', 'like', '%' . $keyword . '%')->get();

        $categorie = Offerta::all()->pluck('Categoria')->unique();  
        
        return view('catalogo')->with('offerte' , $results)->with('categorie',$categorie);
    }
    
    
}