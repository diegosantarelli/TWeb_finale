@extends('public')
@section('content')
<link rel="stylesheet" type="text/css" href="css/Catalogo.css">
    <div id="container">

    
        <div id="categorie">
            <h3>Scegli una categoria</h3>
            <br>
            <label><input id="opt" name="categoria" type="radio">Animali</label><br>
            <label><input id="opt" name="categoria" type="radio">Auto e Moto</label><br>
            <label><input id="opt" name="categoria" type="radio">Casa e Giardino</label><br>
            <label><input id="opt" name="categoria" type="radio">Cibi e Bevande</label><br>
            <label><input id="opt" name="categoria" type="radio">Elettronica</label><br>
            <label><input id="opt" name="categoria" type="radio">Giochi</label><br>
            <label><input id="opt" name="categoria" type="radio">Informatica</label><br>
            <label><input id="opt" name="categoria" type="radio">Intrattenimento</label><br>
            <label><input id="opt" name="categoria" type="radio">Moda</label><br>
            <label><input id="opt" name="categoria" type="radio">Salute</label><br>

        </div>

    <div id="catalogo">
        <h2>Offerte</h2>
    @foreach($offerte as $offerta)
    <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png" href="{{route('coupon')}}">
        <div class="container_card">
            <p>$azienda->Oggetto</p>
        </div>
    </a>
    @endforeach
    

    @foreach($aziende as $azienda)
    <p>{{ $azienda->Nome }}</p>
    <p>{{ $azienda->Sede }}</p>
    <p>{{ $azienda->Tipologia }}</p>
    @endforeach
        </div>

    </div>

 @endsection