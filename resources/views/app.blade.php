<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        {{-- Fontawesome --}}
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

     <!-- Scripts -->
     @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead

  </head>
  <body>
    @inertia
  
   
  </body>
</html>