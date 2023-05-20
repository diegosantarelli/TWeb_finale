<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cheapest Coupons</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Public.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-5f/8Y+6ZKGlNIZlLg7P/Ko27REjli9/Jk2eWvTbgjMtz1Jnh7u7C0KXQq/8J5RUPK7oy/dkw7cI3P0bYoyDqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<!------------------NAVBAR------------------->

<nav class="navbar">

    <div class="left">

        <a href="{{route('home')}}" text-deco>
        <h1 id="tit_nav">Cheapest Coupons</h1>
        </a>
    </div>


    <div class="right">

        <ul class="list">

            <li class="center"><a href="{{route('home')}}">Home</a></li>
            <li class="center"><a href="{{route('catalogo')}}">Catalogo</a></li>
            <li class="center"><a href="{{route('faq')}}">FAQs</a></li>
            <li class="center"><a href="{{route('info')}}" >Info</a></li>

            <form action="{{ route('logout') }}" method="POST" class="logout">
                    @csrf
                    <button type="submit">Logout</button>
            </form>

        </ul>

    </div>

</nav>

