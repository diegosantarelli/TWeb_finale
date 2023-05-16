@extends('public')
@section('content')
<link rel="stylesheet" type="text/css" href="css/Catalogo.css">
    <div id="container">

    
        <div id="categorie">
            <h3>Scegli una categoria</h3>
            <br>
            @foreach($categorie as $categoria)
            <label><input id="opt" name="categoria" type="radio">{{$categoria}}</label><br>
            @endforeach

        </div>

    <div id="catalogo">
        <h2>Offerte</h2>
        @foreach($offerte as $offerta)
        <a class="card" href="{{route('coupon', [$offerta->IdOfferta])}}">
        <img src="img/amazon.png" >
    
        <div class="container_card">
            <p>{{$offerta->Oggetto}}</p>
        </div>
    </a>
    @endforeach
    

    
        </div>

    </div>

 @endsection