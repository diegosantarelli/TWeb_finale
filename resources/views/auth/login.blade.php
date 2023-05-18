@extends('public')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/Login.css')}}">
<div class="static">
    <h1>Accedi</h1>
    
    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
             
             <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username' , 'placeholder' => 'Inserisci il tuo username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password', 'placeholder' => 'Inserisci la tua password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="container-form-btn">                
                {{ Form::submit('Accedi', ['class' => 'form-btn1']) }}
            </div>

            <div  class="wrap-input">
                 <p> Non hai un account? <a  href="{{ route('register') }}">Registrati</a></p>
             </div>            
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection
