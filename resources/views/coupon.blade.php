
@extends('public')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('css/PaginaCoupon.css')}}">
    

  
<section class="product">
  <div class="product-image">
  <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5_logos</title><path d="M48.48,378.73a300.52,300.52,0,0,0,152.89,95.92,262.57,262.57,0,0,0,159.3-17.25,225.52,225.52,0,0,0,66.79-47,6.36,6.36,0,0,0-2-8.53,11.76,11.76,0,0,0-8-.05,401.92,401.92,0,0,1-116.55,39.34,358.13,358.13,0,0,1-127.29-8.83,446.73,446.73,0,0,1-119.1-60.49,5,5,0,0,0-6.06,6.9Z" fill="white"></path><path d="M387.15,388.44a168.11,168.11,0,0,1,48.94-2.23l.67.13a10,10,0,0,1,7.37,12.05A204.71,204.71,0,0,1,429,444.47a2.55,2.55,0,0,0,1.66,3.18,2.51,2.51,0,0,0,2.23-.37A83.31,83.31,0,0,0,464,382.86a12.44,12.44,0,0,0-10.22-13.22A95.75,95.75,0,0,0,384.91,384a2.55,2.55,0,0,0-.57,3.55A2.52,2.52,0,0,0,387.15,388.44Z" fill="white"></path><path d="M304.24,324.92a164,164,0,0,1-28.92,25.3A135.16,135.16,0,0,1,208.63,369a99.49,99.49,0,0,1-57.49-19.85,97.25,97.25,0,0,1-27.36-100.28,112.35,112.35,0,0,1,65.3-69.06,367.67,367.67,0,0,1,104.7-15.55V127A37.82,37.82,0,0,0,261,94.72a59.9,59.9,0,0,0-31.17,4.08,48.89,48.89,0,0,0-27.13,34.67,12,12,0,0,1-12.58,6.72l-50.9-4.5a11.38,11.38,0,0,1-8.38-10.16,103.66,103.66,0,0,1,36.61-63.45A143.86,143.86,0,0,1,257.85,32a146.24,146.24,0,0,1,84.27,27.67,86.82,86.82,0,0,1,30.7,70.22V258.8a84.46,84.46,0,0,0,8,31.28l15.87,23.23a13,13,0,0,1,0,11.23L349.7,364.25a12.5,12.5,0,0,1-12.68-.44A244.84,244.84,0,0,1,304.24,324.92Zm-10.6-116.83a257.68,257.68,0,0,0-44,2.89A63,63,0,0,0,208,242.54a63,63,0,0,0,3.07,54,40.6,40.6,0,0,0,47.11,12.19,78.61,78.61,0,0,0,35.46-55.58V208.09" fill="white"></path></svg>
  </div>
  <div class="product-info">
    <h2>{{$selOfferta->Oggetto}}</h2>
    <p> Descrizione offerta: {{$selOfferta->DescrizioneOfferta}}</p>
    <p> Categoria: {{$selOfferta->Categoria}}</p>
    <p> Azienda: {{$selOfferta->Azienda}}</p>
    <p> Scadenza: {{$selOfferta->Scadenza}}</p>
    <p class="prezzo_originale"> Prezzo originale: {{$selOfferta->Prezzo}}€</p>
    <p> Percentuale sconto: {{$selOfferta->PercentualeSconto}}%</p>
    <p class="prezzo_scontato"> Prezzo scontato: {{$selOfferta->PrezzoScontato}}€</p>
    <p> Luogo di fruizione: {{$selOfferta->Luogo}}</p>
    <p> Modalità di fruizione: {{$selOfferta->Modalità}}</p>
    <!-- <input class="button" href="{{route('home')}}"> Ottieni Coupon</button> -->
    <div>
        <a href="{{ route('login') }}" class="button">Ottieni Coupon</a>
    </div>

  </div>
</section>



@endsection