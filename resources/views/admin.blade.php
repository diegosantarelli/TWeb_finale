@extends('layouts.navadmin')

@section('title', 'Area Admin')

@section('content')
<div class="static">
    <h3>Area Amministratore</h3>
    <p>Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    <p>Scegli sulla navbar la funzione da attivare</p>
</div>
@endsection


