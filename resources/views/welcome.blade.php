<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/foundation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/app.css') }}">
    </head>
    <body>
        <header>
          <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle></button>
            <div class="title-bar-title">Menu</div>
          </div>

          <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
            <span class="logo-left">LOGO APAE</span>
            <div class="top-bar-left">
              <ul class="dropdown menu align-right" data-dropdown-menu>
                <li><a href="#">Inicio</a></li>
                <li>
                  <a href="#">Projetos</a>
                  <ul class="menu vertical nested">
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                  </ul>
                </li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Transparência</a></li>
                <li><a href="#">Presidentes</a></li>
                <li class="doacao"><a href="#">Doação</a></li>
              </ul>
            </div>
          </div>
        </header>
        <main>
          <section class="background-cover slick main-slider">
            <div class="slide">
              <img src="{{asset('img/editado-52.jpg')}}" alt="">
            </div>
            <div class="slide">
              <img src="{{asset('img/editado-64.jpg')}}" alt="">
            </div>
            <div class="slide">
              <img src="{{asset('img/editado-70.jpg')}}" alt="">
            </div>
          </section>
          <section class="container-projetos">
            <h1 class="titulo-container">PROJETOS</h1>
          </section>

        </main>
        <footer>
          <script src="{{asset('js/jquery.js')}}" type="text/javascript" charset="utf-8"></script>
          <script src="{{asset('js/what-input.js')}}" type="text/javascript" charset="utf-8"></script>
          <script src="{{asset('js/foundation.js')}}" type="text/javascript" charset="utf-8"></script>
          <script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
          <script src="{{asset('js/app.js')}}" type="text/javascript" charset="utf-8"></script>
        </footer>
    </body>
</html>
