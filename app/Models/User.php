<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use App\Models\User;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'username';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
    * protected $fillable = [
    *    'name',
    *    'email',
    *    'password',
    *];
     */

    protected $fillable = [
        'cognome',
        'email',
        'età',
        'genere',
        'role',
        'nome',
        'password',
        'possibilità_abbinamento',
        'residenza',
        'telefono',
        'username',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'username',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Indicates if the model should be timestamped.
     * Usato per togliere L'errore indica che il campo
     * 'updated_at' non è presente nella tabella 'users'.
     * Laravel di default assume che le tabelle abbiano i campi 'created_at'
     * e 'updated_at' per la gestione automatica delle date di creazione e modifica dei record.
     * @var bool
     */

    /* Funzione per verificare il livello di utenza dell'utente loggato */
    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->role, $role);
    }

}
