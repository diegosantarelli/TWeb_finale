<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Offerta extends Model
{
    protected $table = 'Offerte';

    // prodId non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['Nome'];

    public $timestamps = false;
}
