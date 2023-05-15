@extends('public')
@section('content')

<link rel="stylesheet" type="text/css" href="css/Home.css">

<div class="slideshow-container">

<a href="{{route('coupon')}}" > <div  class="mySlides fade">
  <img src="img/coupon.jpg">
</div> </a>

<a href="{{route('coupon')}}">
<div class="mySlides fade">
  <img src="img/coupon1.jpg">
</div> </a>

<a href="{{route('coupon')}}" >
<div class="mySlides fade">
  <img src="img/coupon2.jpg">
</div> </a>

<!-- L'attributo onclick definisce la funzione JavaScript plusSlides(...) da eseguire quando l'utente fa clic sul link.
  Questa funzione potrebbe essere utilizzata per passare alla diapositiva precedente (o successiva) in uno slideshow.
  Questi elementi HTML definiscono un link ipertestuale che, quando viene cliccato, esegue una funzione JavaScript
  per passare alla diapositiva precedente (o successiva) in uno slideshow. -->

<a class="prev" onclick="plusSlides(-1)">❮</a> 
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<script>

/* la variabile slideIndex tiene traccia dell'indice della diapositiva corrente,
 e la chiamata alla funzione showSlides con l'argomento slideIndex consente di visualizzare la diapositiva corretta inizialmente.*/

      let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}
</script>

<br>
<hr>
<br>

<div id="catalogo">
    <h3 class="card_title">Offerte in evidenza</h3>

    <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png" href="{{route('coupon')}}">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>

    <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>
    
    <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>

    <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>

     <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>

     <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>

    <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>

   <a class="card" href="{{route('coupon')}}">
        <img src="img/amazon.png">
        <div class="container_card">
            <p>Amazon</p>
        </div>
    </a>
</div>

</div>
@endsection