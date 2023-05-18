<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', [PublicController::class, 'showCatalog1'])
        ->name('catalog1');

Route::get('/selTopCat/{topCatId}', [PublicController::class, 'showCatalog2'])
        ->name('catalog2');

Route::get('/selTopCat/{topCatId}/selCat/{catId}', [PublicController::class, 'showCatalog3'])
        ->name('catalog3');

Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin');

Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])
        ->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])
        ->name('newproduct.store');

Route::get('/user', [UserController::class, 'index'])
        ->name('user')->middleware('can:isUser');


Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

/*  Rotte aggiunte da Breeze

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/

/* Rotta per la vista 'home' */
Route::get('/', [PublicController::class, 'showHome']) ->name('home');

/* Rotta per la vista 'catalogo' */
Route::get('/catalogo/{Categoria?}', [PublicController::class, 'showCatalog'])->name('catalogo');

/* Rotta per la vista 'faq' */
Route::get('/faq', [PublicController::class, 'showFaq']) ->name('faq');

/* Rotta per la vista 'info' */
Route::get('/info', [PublicController::class, 'showInfo']) ->name('info');

/* Rotta per la vista 'login' */
/*Route::get('/login', [PublicController::class, 'showLogin']) ->name('login');*/
Route::post('/login', [App\Http\Controllers\Auth\PublicController::class, 'showLogin'])->name('login');


/* Rotta per la vista 'coupon' */
Route::get('/coupon/{IdOfferta?}', [PublicController::class, 'showCoupon']) ->name('coupon');

/* Rotta per la vista 'registrati' */
Route::get('/registrazione', [PublicController::class, 'showSignIn']) ->name('registrazione');

/* Rotta per la barra di ricerca */
Route::get('/search', [PublicController::class, 'search'])->name('search');

/* Rotta che protegge altre rotte quando l'utente non è autenticato*/
Route::middleware([Authenticate::class, 'auth'])->group(function () {
        // Rotte protette dall'autenticazione
        // mettere rotta che ti collega alla pagina del coupon da stampare 

    });
    


require __DIR__.'/auth.php';

/*
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::post('/login', function (Request $request) {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // L'utente è autenticato
        return redirect()->intended('/');
    } else {
        // Le credenziali non sono corrette
        return back()->withErrors([
            'username' => 'Credenziali non valide',
        ]);
    }
})->name('login');
*/