@extends('public')

@section('content')
<link rel="stylesheet" type="text/css" href="css/Login.css">
<div class="login-container">
 
<h1>Accedi</h1>
  
  <div class="content">
      <form method="post">
      @csrf
        <div class="user-details">

          <div class="input-box">
          
            <span class="details">Username</span>
            <input type="text" id="username" name="username" placeholder="Inserisci l'username" value="{{ old('username') }}">
            @if ($errors->first('username'))
            <ul class="errors">
            @foreach ($errors->get('username') as $message)
              <li>{{ $message }}</li>
             @endforeach
            </ul>
            @endif
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Inserisci la password" value="{{ old('password') }}">
            @if ($errors->first('password'))
            <ul class="errors">
            @foreach ($errors->get('password') as $message)
              <li>{{ $message }}</li>
             @endforeach
            </ul>
            @endif
          </div>

        <div class="button">
          <input type="submit" value="Accedi">
        </div>
      </form>

      <div class="link-register">
        <a class="link-register-left"> Non hai un'account? </a>
        <a class="link-register-right" href="{{route('registrazione')}}"> Registrati </a>
      </div>

    </div>

</div>



@endsection