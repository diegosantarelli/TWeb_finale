@extends('public')

@section('content')

<link rel="stylesheet" type="text/css" href="css/Faq.css">

<section id="faq_section">
        <h2 class="titolo">DOMANDE FREQUENTI</h2>
        <br>
        
        
        <form action="{{route('modifyfaq',$faq->id)}}" method="POST" >
        @csrf
       @method('PUT')
        <label for="Domanda">Domanda:</label><input type="text" name="Domanda" value="{{$faq->Domanda}}">
        <label for="Risposta">Risposta:</label><input type="text" name="Risposta" value="{{$faq->Risposta}}">
        
  <button type="submit" >Modifica la domanda</button>
        </form>
        
        
</section>
@endsection