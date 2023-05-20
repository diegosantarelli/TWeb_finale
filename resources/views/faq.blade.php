@extends('public')

@section('content')

<link rel="stylesheet" type="text/css" href="css/Faq.css">

<section id="faq_section">
        <h2 class="titolo">DOMANDE FREQUENTI</h2>
        <br>
        @foreach($faqs as $faq)
        <details>
                <summary>
                {{$faq->Domanda}}
                </summary>
                <p>
                {{$faq->Risposta}}
                </p>
        </details>
        @endforeach
        
</section>

@can('isAdmin')
<a href="{{route('insertfaq')}}">inserisci una faq</a>
<a href="{{route('deletefaq')}}">elimina una faq</a>
<a href="{{route('modificafaq')}}">modifica una faq</a>
@endcan
    
@endsection


