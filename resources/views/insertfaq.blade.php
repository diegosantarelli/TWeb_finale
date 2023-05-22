@extends('public')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Faq.css')}}">

{{ Form::open(array('route' => 'storefaq')) }}
{{ Form::token() }}
{{ Form::label('Domanda', 'Domanda') }}
    {{ Form::text('Domanda', null, ['class' => 'form-control']) }}<br>
    @if ($errors->first('Domanda'))
                <ul class="errors">
                    @foreach ($errors->get('Domanda') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

    {{Form::label('Risposta', 'Risposta') }}
    {{ Form::text('Risposta', null, ['class' => 'form-control']) }}<br>
    @if ($errors->first('Risposta'))
                <ul class="errors">
                    @foreach ($errors->get('Risposta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                {{ Form::submit('Crea faq', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection