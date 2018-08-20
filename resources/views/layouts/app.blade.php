<!doctype html>
<html lang="es">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @yield('page-title')

      {{-- css --}}
      <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

      {{-- Favicons --}}
      <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('/fav/apple-touch-icon-57x57.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/fav/apple-touch-icon-114x114.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/fav/apple-touch-icon-72x72.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/fav/apple-touch-icon-144x144.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('/fav/apple-touch-icon-60x60.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('/fav/apple-touch-icon-120x120.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('/fav/apple-touch-icon-76x76.png') }}" />
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('/fav/apple-touch-icon-152x152.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('/fav/favicon-196x196.png') }}" sizes="196x196" />
      <link rel="icon" type="image/png" href="{{ asset('/fav/favicon-96x96.png') }}" sizes="96x96" />
      <link rel="icon" type="image/png" href="{{ asset('/fav/favicon-32x32.png') }}" sizes="32x32" />
      <link rel="icon" type="image/png" href="{{ asset('/fav/favicon-16x16.png') }}" sizes="16x16" />
      <link rel="icon" type="image/png" href="{{ asset('/fav/favicon-128.png') }}" sizes="128x128" />
      <meta name="application-name" content="SAGA Service"/>
      <meta name="msapplication-TileColor" content="#FFFFFF" />
      <meta name="msapplication-TileImage" content="{{ asset('/fav/mstile-144x144.png') }}" />
      <meta name="msapplication-square70x70logo" content="{{ asset('/fav/mstile-70x70.png') }}" />
      <meta name="msapplication-square150x150logo" content="{{ asset('/fav/mstile-150x150.png') }}" />
      <meta name="msapplication-wide310x150logo" content="{{ asset('/fav/mstile-310x150.png') }}" />
      <meta name="msapplication-square310x310logo" content="{{ asset('/fav/mstile-310x310.png') }}" />
    </head>
    <body>
      @include('layouts.header')
      <main>
        @yield('content')
      </main>

      {{-- scripts --}}

      @include('layouts.footer')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      @yield('specialScripts')
    </body>
</html>
