@extends('public')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Catalogo.css')}}">
@foreach($aziende as $azienda)

<div id="catalogo">
        <h2>Aziende</h2>
        @if (count($aziende) == 0)
    <p>Siamo spiacenti ma i parametri da lei selezionati non hanno prodotto nessuno risultato</p>
    @else
    @foreach($offerte as $offerta)
            <a class="card" href="{{route('')}}">
                <img src="{{ asset('img/amazon.png') }}?t={{ time() }}" >
            <div class="container_card">
                <p>{{$azienda->Nome}}</p>
            </div>
            </a>
        @endforeach
    @endif
        
   
    </div>



@endforeach

@endsection