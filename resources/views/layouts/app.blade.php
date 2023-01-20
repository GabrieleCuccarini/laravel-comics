<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  {{-- Viene caricato il JS ed anche il file app.scss --}}
  @vite('resources/js/app.js')
</head>

<body>

  {{-- HEADER--}}
  @include('partials.header')

  <div class="container">
    @yield('content')
  </div>

  {{-- FOOTER --}}
  @include('partials.footer')

</body>

</html>