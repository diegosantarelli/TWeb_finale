<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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


        $role = auth()->user()->role;

        switch ($role) {
            case 'user':
                return redirect()->route('homeuser');
                break;
            case 'staff':
                return redirect()->route('homemembro');
                break;
            case 'admin':
                return redirect()->route('amministratore');
                break;
            default:
                return redirect('/');
            }
        /**
         * Redirezione su diverse Home Page in base alla classe d'utenza.
         * return redirect()->intended(RouteServiceProvider::HOME);
         */

        $id = auth()->user()->id;
        return redirect()->route('profile', ['id' => $id]);

    }

/*
    return back()->withErrors([
        'username' => 'Queste credenziali non corrispondono ai nostri record.',
    ]);
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


    public function showProfile($id)
    {
        $user = user::find($id);
        return view('profile', ['user' => $user]);
    }

}
