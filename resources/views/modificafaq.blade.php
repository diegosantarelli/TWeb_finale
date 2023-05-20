@extends('public')

@section('content')

<link rel="stylesheet" type="text/css" href="css/Faq.css">

<section id="faq_section">
        <h2 class="titolo">DOMANDE FREQUENTI</h2>
        <br>
        
        @foreach($faqs as $faq)
        {{ Form::open(array('route' => ['updatefaq', $faq->id], 'method' => 'GET')) }}
@method('GET')
{{ Form::token() }}
        <details>
                <summary>
                {{$faq->Domanda}} 

                </summary>
                <p>
                {{$faq->Risposta}} 
                </p>
                
        </details>
        
  
        {{ Form::submit('Modifica faq', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}  
        @endforeach
        
</section>
@endsection