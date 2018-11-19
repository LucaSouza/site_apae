<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/foundation.css') }}">
        <link rel="stylesheet" href="{{asset('css/app.css') }}">
    </head>
    <body>
        <header>
          <div class="grid-x">
            <div class="medium-6 large-4 cell">6 cells</div>
            <div class="medium-6 large-8 cell">6 cells</div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="medium-6 large-4 cell">6 cells</div>
            <div class="medium-6 large-8 cell">6 cells</div>
          </div>
        </header>
        <main>

        </main>
        <footer>
          <script src="{{asset('js/jquery.js')}}" type="text/javascript" charset="utf-8"></script>
          <script src="{{asset('js/what-input.js')}}" type="text/javascript" charset="utf-8"></script>
          <script src="{{asset('js/foundation.js')}}" type="text/javascript" charset="utf-8"></script>
          <script src="{{asset('js/app.js')}}" type="text/javascript" charset="utf-8"></script>
        </footer>
    </body>
</html>
