<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nome' => ['required', 'string','min:2', 'max:50' ],
            'cognome' => ['required', 'string','min:2','max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'genere' => ['required', 'string', 'max:255'],
            'livello' => ['required', 'integer', 'min:1', 'max:3'],
            'possibilità_abbinamento' => ['required', 'boolean'],
            'residenza' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'numeric', 'digits_between:1,15'],
            'età' => ['required', 'integer', 'min:1', 'max:100'],
        ]);

        $user = User::create([
            'nome' => $request->input('nome'),
            'cognome' => $request->input('cognome'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'genere' => $request->input('genere'),
            'livello' => $request->input('livello'),
            'possibilità_abbinamento' => $request->input('possibilità_abbinamento'),
            'residenza' => $request->input('residenza'),
            'telefono' => $request->input('telefono'),
            'età' => $request->input('età'),
        ]);
        
           
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
