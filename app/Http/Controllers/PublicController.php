<?php
 
namespace App\Http\Controllers;
 

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
 
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
        return view('catalogo');
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
    public function showCoupon(): View {
        return view('coupon');
    }

    public function showSignIn(): View {
        return view('registrazione');
    }


    
    
}