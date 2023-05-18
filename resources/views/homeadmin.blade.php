@extends('public')
@section('content')
<h2> Gestione aziende</h2>
<a href="{{route('insertazienda')}}">inserisci un'azienda'</a>
<a href="{{route('deleteazienda')}}">elimina un'azienda'</a>
<a href="{{route('modificaazienda')}}">modifica un'azienda'</a>


@endsection()