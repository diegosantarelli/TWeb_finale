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
        
/*
        $request->validate([
            'nome' => ['required', 'string','min:2', 'max:50' ],
            'cognome' => ['required', 'string','min:2','max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'genere' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string'],
            'possibilità_abbinamento' => ['nullable', 'boolean'],
            'residenza' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'numeric', 'digits_between:1,15'],
            'età' => ['required', 'integer', 'min:1', 'max:100'],
            //'id' => ['nullable','string']
        ]);

        /* Verifica se 'livello' è stato compilato, altrimenti imposta a null
        if (!$request->filled('livello')) {
            $request->merge(['livello' => null]);
        } */

        /* Verifica se 'possibilità_abbinamento' è stato compilato, altrimenti imposta a null
        if (!$request->filled('possibilità_abbinamento')) {
            $request->merge(['possibilità_abbinamento' => null]);
        } */

        /* Verifica se 'id' è stato compilato, altrimenti imposta a null
        if (!$request->filled('id')) {
            $request->merge(['id' => null]);
        } */

        

        $user = User::create([
            'nome' => $request->input('nome'),
            'cognome' => $request->input('cognome'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'genere' => $request->input('genere'),
            //'role' => $request->input('role')? $request->input('role') : 'user',
            //'possibilità_abbinamento' => $request->input('possibilità_abbinamento') ? $request->input('possibilità_abbinamento') : null,
            'residenza' => $request->input('residenza'),
            'telefono' => $request->input('telefono'),
            'età' => $request->input('età'),
          //'id' => $request->input('id') ? $request->input('id') : null,
        ]);


        $user->save();

        event(new Registered($user));

        Auth::login($user);

        // Imposta un messaggio di successo nella sessione
       /* session(['success' => 'Registrazione completata con successo!']);
        dd(session('success'));*/
        
        return redirect(RouteServiceProvider::HOME);

    }
}
