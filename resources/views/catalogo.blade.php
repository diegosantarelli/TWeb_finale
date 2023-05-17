@extends('public')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Catalogo.css')}}">
    <div id="container">
     
    <div class="search_container">
    <form action="{{ route('catalog.search') }}" method="GET" class="search-bar">
        <input type="text" name="query" placeholder="Cerca per oggetto">
        <input type="text" name="keyword" placeholder="Cerca per azienda">
        <button type="submit">Cerca</button>
    </form>
</div>


    <div id="categorie">
        <h3>Scegli una categoria</h3>
        <br>
            @foreach($categorie as $categoria)
            <label>
            <input type="radio" name="categoria" value="{{ $categoria }}" onclick="window.location.href='{{ route('catalogo', [$categoria]) }}'" @if ($categoria === $Categoria) checked @endif>
            {{ $categoria }}
            </label><br>
            @endforeach
    </div>

   <div id="catalogo">
        <h2>Offerte</h2>
        @foreach($offerte as $offerta)
            <a class="card" href="{{route('coupon', [$offerta->IdOfferta])}}">
                <img src="{{ asset('img/amazon.png') }}?t={{ time() }}" >
            <div class="container_card">
                <p>{{$offerta->Oggetto}}</p>
            </div>
            </a>
        @endforeach
    </div>
  
    
   <div class="offerta">
            @foreach ($results as $offerta)
            <p>{{ $offerta->nome }}</p>
            <!-- <a class="card" href="{{route('coupon', [$offerta->IdOfferta])}}">
                <img src="{{ asset('img/amazon.png') }}?t={{ time() }}" >
            <div class="container_card">
                <p>{{$offerta->Oggetto}}</p>
            </div>
            </a>
            -->
            @endforeach
    </div>



   

    


 @endsection