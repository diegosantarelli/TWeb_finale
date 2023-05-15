@extends('public')

@section('content')

<link rel="stylesheet" type="text/css" href="css/Faq.css">

<section id="faq_section">
        <h2 class="titolo">DOMANDE FREQUENTI</h2>
        <br>
       <!-- <p id="paragrafo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor rutrum nisl eu facilisis. Vestibulum feugiat pretium nibh, vitae accumsan dolor varius id.
        </p>-->
        <details>
                <summary>
                Vestibulum eget?
                </summary>
                <p>
                Quisque lacinia molestie felis, vitae sodales neque viverra nec. Proin eu metus quis magna varius sagittis eget id ante. Maecenas vel lacus pretium, varius est quis, egestas velit. Vestibulum eget lacinia mauris.
                </p>
        </details>
        <details>
                <summary>
                Vivamus?
                </summary>
                <p>
                Praesent eget sagittis turpis. Nunc mattis arcu ullamcorper ligula interdum sagittis. Mauris sem enim, bibendum sed aliquet non, sollicitudin et quam. Vivamus quis vestibulum sapien.
                </p>
        </details>
</section>
    
@endsection


