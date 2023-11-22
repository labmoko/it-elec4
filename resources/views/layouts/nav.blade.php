
  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="header">
    <h2>TINDAHAN</h2>
    <div class="user-icon">
        <i class="fas fa-user"></i>
    </div>
</div>

<div class="navigation">
    <div class="container" style="display: inline-flex; margin-left: 50px;">
        <ul class="nav justify-content-center">
            <li class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('new')}}">NEW</a>
            </li>
            <li class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('sale')}}">SALE</a>
            </li>
            <li class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('clothing')}}">CLOTHING</a>
            </li>
            <li class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('donation')}}">DONATION</a>
            </li>
            <li class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('aboutus')}}">ABOUT US</a>
            </li>
            <li class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('explore')}}">EXPLORE</a>
            </li>
           
        </ul>
    </div>
</div>


<main  class="py-4" >   <!--class="py-4" style="display:flex;justify-content:center;" -->
@yield('content')
@yield('section')
@yield('new')
@yield('sale')
@yield('category')
@yield('imagesfornew')
@yield('salepic')
@yield('clothing')
@yield('picss')
@yield('secondsetofproducts')
<!--@yield('donations')-->
@yield('donate-bg')
@yield('about-us-article')


</main>
</body>
</html>
