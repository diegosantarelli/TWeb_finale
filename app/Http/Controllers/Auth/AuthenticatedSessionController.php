<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller {

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request) {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();
        $livello = $user->livello;

        switch ($livello) {
            case 1:
                return redirect()->route('home');
                break;
            case 2:
                return redirect()->route('livello2.home');
                break;
            case 3:
                return redirect()->route('livello3.home');
                break;
            default:
                return redirect('/');
            }
        /**
         * Redirezione su diverse Home Page in base alla classe d'utenza.
         */
        return redirect()->intended(RouteServiceProvider::HOME);
    }
 /*       $role = auth()->user()->role;
        switch ($role) {
            case 'admin': return redirect()->route('admin');
                break;
            case 'user': return redirect()->route('user');
                break;
            default: return redirect('/');
        }
    }
*/
/*
public function store(Request $request) {
    $credentials = $request->validate([
        'username' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();
        $livello = $user->livello;

        switch ($livello) {
            case 1:
                return redirect()->route('home');
                break;
            case 2:
                return redirect()->route('livello2.home');
                break;
            case 3:
                return redirect()->route('livello3.home');
                break;
            default:
                return redirect('/');
        }
    }

    return back()->withErrors([
        'username' => 'Queste credenziali non corrispondono ai nostri record.',
    ]);
    
}
*/
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}