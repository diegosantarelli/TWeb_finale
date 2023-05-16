<?php
 
namespace App\Http\Controllers;
 

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Offerta;
 
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
    public function showCatalog(): View {
        $offerte = Offerta::all();
        $categorie = $offerte->pluck('Categoria')->unique();

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
    
    
}