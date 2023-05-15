<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Azienda extends Model
{
    protected $table = 'azienda';
    protected $primaryKey = 'Nome';
    
    // prodId non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['Nome'];

    public $timestamps = false;

}
