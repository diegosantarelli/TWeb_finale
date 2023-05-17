@extends('public')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Catalogo.css')}}">
    <div id="container">
        
    <form action="{{ route('search')}}" method="GET">
  <input type="text" name="keyword" placeholder="Inserisci l'oggetto dell'offerta">
  <button type="submit">Cerca</button>
</form>



    
        <div id="categorie">
            <h3>Scegli una categoria</h3>
            <br>
            @foreach($categorie as $categoria)
            <a href="{{route('catalogo', [$categoria])}}">{{$categoria}}</a><br>
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