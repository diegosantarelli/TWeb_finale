@extends('public')

@section('title', 'Registrazione')

@section('content')

<!-- HTML generato già nel file 
    
<link rel="stylesheet" type="text/css" href="{{asset('css/Registrazione.css')}}">
<div class="static">
    <h1>Registrazione</h1>
    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
            <div class="user-details">
            <div  class="wrap-input">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name', 'placeholder' => 'Inserisci il tuo nome']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname', 'placeholder' => 'Inserisci il tuo cognome']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email', 'placeholder' => 'Inserisci la tua email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username', 'placeholder' => 'Inserisci il tuo username']) }}
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
                {{ Form::password('password', ['class' => 'input', 'id' => 'password' , 'placeholder' => 'Inserisci la tua password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm', 'placeholder' => 'Conferma password']) }}

            </div>
</div>
            <div class="container-form-btn">                
                {{ Form::submit('Registrati', ['class' => 'form-btn1']) }}
            </div>

            <div  class="write-login">
                 <p> Hai già un account? <a  href="{{ route('login') }}">Accedi</a></p>
             </div>         
            
            {{ Form::close() }}
        </div>
    </div>

</div>-->

<link rel="stylesheet" type="text/css" href="css/Registrazione.css">

<div class="signup-container">

  <h1>Registrazione</h1>
  
  <div class="content">
  {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
        <div class="user-details">

          <div class="input-box">
          {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name', 'placeholder' => 'Inserisci il tuo nome']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
          </div>

          <div class="input-box">
          {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname', 'placeholder' => 'Inserisci il tuo cognome']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
          </div>

          <div class="input-box">
          {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email', 'placeholder' => 'Inserisci la tua email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
          </div>

          <div class="input-box">
          {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username', 'placeholder' => 'Inserisci il tuo username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
          </div>

          <div class="input-box">
          {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password' , 'placeholder' => 'Inserisci la tua password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
          </div>

          <div class="input-box">  
          {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm', 'placeholder' => 'Conferma password']) }}
          </div>

         
        </div>

        <div class="button">
        {{ Form::submit('Registrati', ['class' => 'form-btn1']) }}
        </div>

      </form>

      {{ Form::close() }}
      
      <div class="link-login">
        <a class="link-login-left"> Hai già un'account? </a>
        <a class="link-login-right" href="{{route('login')}}"> Accedi </a>
      
      </div>
    


    </div>

   
  </div>

@endsection


