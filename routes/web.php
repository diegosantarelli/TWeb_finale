<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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

/* Rotta per la vista 'home' */
Route::get('/', [PublicController::class, 'showHome']) ->name('home');

/* Rotta per la vista 'catalogo' */
Route::get('/catalogo', [PublicController::class, 'showCatalog'])->name('catalogo');

/* Rotta per la vista 'faq' */
Route::get('/faq', [PublicController::class, 'showFaq']) ->name('faq');

/* Rotta per la vista 'info' */
Route::get('/info', [PublicController::class, 'showInfo']) ->name('info');

/* Rotta per la vista 'login' */
Route::get('/login', [PublicController::class, 'showLogin']) ->name('login');

/* Rotta per la vista 'coupon' */
Route::get('/coupon/{IdOfferta}', [PublicController::class, 'showCoupon']) ->name('coupon');

/* Rotta per la vista 'registrati' */
Route::get('/registrazione', [PublicController::class, 'showSignIn']) ->name('registrazione');


Route::get('/coupon1', [PublicController::class, 'showCoupon1']) ->name('coupon1');










        
