@extends('public')

@section('content')
<link rel="stylesheet" type="text/css" href="css/Registrazione.css">

<div class="signup-container">

  <h1>Registrazione</h1>
  
  <div class="content">
      <form>
        <div class="user-details">

          <div class="input-box">
            <span class="details">Nome</span>
            <input type="text" id="name" name="name" required pattern="^[a-zA-Z\s]+$" placeholder="Inserisci il nome" required>
          </div>

          <div class="input-box">
            <span class="details">Cognome</span>
            <input type="text" id="surname" name="surname" required pattern="^[a-zA-Z\s]+$" placeholder="Inserisci il cognome" required>
          </div>

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="username" name="username" placeholder="Inserisci l'username" required>
          </div>

          <div class="input-box">
            <span class="details">Data di nascita</span>
            <input type="date" id="date" name="date"placeholder="Inserisci la data di nascita" required>
          </div>

          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" id="email" name="email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Inserisci la email" required>
          </div>

          <div class="input-box">
            <span class="details">Telefono</span>
            <input type="tel" id="telephone" name="telephone"  pattern="[0-9]{9,10}" placeholder="Inserisci il numero di telefono" required>
          </div>

          <div class="input-box">
            <span class="details">Città</span>
            <input type="text" id="city" name="city" placeholder="Inserisci la città" required>
          </div>

          <div class="input-box">
            <span class="details">Indirizzo</span>
            <input type="text" id="address" name="address"placeholder="Inserisci l'indirizzo" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" minlength="4" placeholder="Inserisci la password" required>
          </div>

          <div class="input-box">
            <span class="details">Conferma Password</span>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Conferma la password" required>
          </div>

          <script>
          var passwordInput = document.getElementById("password");
          var confirmPasswordInput = document.getElementById("confirm-password");

          function validatePassword() {
          if (passwordInput.value != confirmPasswordInput.value) {
          confirmPasswordInput.setCustomValidity("Le password non corrispondono");}
          else {confirmPasswordInput.setCustomValidity("");}
          }

          passwordInput.addEventListener("input", validatePassword);
          confirmPasswordInput.addEventListener("input", validatePassword);
          </script>

        </div>

        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" required>
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">

          <span class="gender-title">Genere</span>
          <div class="category">

          <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Maschio</span>
          </label>

          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Femmina</span>
          </label>

          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Preferisco non specificarlo</span>
          </label>
          </div>
        </div>

        <div class="button">
          <input type="submit" value="Registrati">
        </div>

      </form>

      <div class="link-login">
        <a class="link-login-left"> Hai già un'account? </a>
        <a class="link-login-right" href="{{route('login')}}"> Accedi </a>
      
      </div>

    </div>

   
  </div>


@endsection