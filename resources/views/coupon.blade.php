
@extends('public')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('css/PaginaOfferta.css')}}">
    

  
    <section class="product">
    <div class="image">
        @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $selOfferta->image])
    </div>

    <div class="product-info">
        <h2>{{$selOfferta->Oggetto}}</h2>

        <p> Descrizione offerta: {{$selOfferta->DescrizioneOfferta}}</p>

        <p> Categoria: {{$selOfferta->Categoria}}</p>

        <p> Azienda: {{$selOfferta->Azienda}}</p>

        <p> Scadenza: {{$selOfferta->Scadenza}}</p>

        <p class="prezzo_originale"> Prezzo originale: {{$selOfferta->Prezzo}}€</p>

        <p> Percentuale sconto: {{$selOfferta->PercentualeSconto}}%</p>

        @php
            $prezzoScontato = $selOfferta->Prezzo - ($selOfferta->Prezzo * $selOfferta->PercentualeSconto / 100);
        @endphp

        <p class="prezzo_scontato"> Prezzo scontato: {{$prezzoScontato}}€</p>

        <p> Luogo di fruizione: {{$selOfferta->Luogo}}</p>

        <p> Modalità di fruizione: {{$selOfferta->Modalità}}</p>

        @guest
        <div class=coupon-accedi>
          Per ottenere il coupon <a href="{{ route('login') }}"> Accedi </a>
        </div>
        @endguest

        @can('isUser')
        <div>
            <a href="{{ route('login') }}" class="button">Ottieni Coupon</a>
        </div>
        @endcan

        @can('isAdmin')
        <div class=coupon-accedi>
          Non puoi ottenere il coupon come Admin!
        </div>
        @endcan
        
        @can('isStaff')
        <div class=coupon-accedi>
          Non puoi ottenere il coupon come Membro dello Staff!
        </div>
        @endcan

    </div>
</section>





@endsection