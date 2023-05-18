@extends('public')

@section('content')

<link rel="stylesheet" type="text/css" href="css/Faq.css">

<section id="faq_section">
        <h2 class="titolo">DOMANDE FREQUENTI</h2>
        <br>
        
        @foreach($faqs as $faq)
        <form method="POST" action="{{route('destroyfaq', [$faq->id])}}">
        @csrf
        @method('DELETE')
        <details>
                <summary>
                {{$faq->Domanda}} 

                </summary>
                <p>
                {{$faq->Risposta}} 
                </p>
                
        </details>
        
  
  <button type="submit" >Elimina la domanda</button>
</form>
        @endforeach
        
</section>
@endsection
