@extends('public')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('css/PaginaAzienda.css')}}">
    

  
<section class="product">
  <div class="image">
     @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $selAzienda->image])
    </div>

  <div class="product-info">
    <h2>{{$selAzienda->Nome}}</h2>

    <p> Sede: {{$selAzienda->Sede}}</p>

    <p> Tipologia: {{$selAzienda->Tipologia}}</p>

    <p> Ragione sociale: {{$selAzienda->RagioneSociale}}</p>

  </div>
</section>



@endsection