@extends('public')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Aziende.css') }}">

    <div class="container-aziende">
        <div class="catalogo">
            <h2>Le nostre Aziende</h2>
            @if ($aziende->isEmpty())
                <div class="catalogo-empty">Non sono disponibili Aziende</div>
            @else
                @foreach($aziende as $azienda)
                    <div class="card" href="#">
                    <p>{{ $azienda->Nome }}</p>
                    <div class="image">
                        @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $azienda->image])
                    </div>
                    
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection