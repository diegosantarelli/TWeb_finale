@extends('public')

@section('content')

<link rel="stylesheet" type="text/css" href="css/Faq.css">
<form action="{{route('storefaq')}}" method="POST">
@csrf
    <label for="Domanda">Domanda:</label><input type="text" name="Domanda" placeholder="Inserisci una domanda">
    <label for="Risposta">Risposta:</label><input type="text" name="Risposta" placeholder="Inserisci una risposta">
    <button type="submit">Aggiungi faq</button>
</form>
@endsection