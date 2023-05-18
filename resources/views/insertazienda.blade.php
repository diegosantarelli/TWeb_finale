@extends('public')
@section('content')


{{ Form::open(array('route' => 'storeazienda')) }}

    {{ Form::label('Nome', 'Nome') }}
    {{ Form::text('Nome', null, ['class' => 'form-control']) }}<br>

    {{Form::label('Sede', 'Sede') }}
    {{ Form::text('Sede', null, ['class' => 'form-control']) }}<br>

    {{Form::label('Tipologia', 'Tipologia') }}
    {{ Form::text('Tipologia', null, ['class' => 'form-control']) }}<br>

    {{Form::label('RagioneSociale', 'RagioneSociale') }}
    {{ Form::text('RagioneSociale', null, ['class' => 'form-control']) }}<br>

    {{ Form::submit('Crea azienda', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}



@endsection()
      
      