<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#26272D">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Webcipe') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,700&display=swap" rel="stylesheet"> -->

    <!-- Icons -->
    <link rel="icon" href="{{ asset('assets/images/ICO2.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/icons/ICO-Apple.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <noscript>
        This site requires Javascript to run.
    </noscript>
    <div id="root">
        
    </div>

    <!-- React -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
