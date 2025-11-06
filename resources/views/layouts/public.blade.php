<!doctype html>
<html lang="id">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <title>{{ config('app.name') }}</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main.container {
      flex: 1;
      /* This makes the content area take up remaining vertical space */
    }
  </style>
</head>

<body>
  @include('layouts.partials.header')

  <main class="container my-4 flex-grow-1">
    @yield('content')
  </main>

  @include('layouts.partials.footer')


</body>

</html>