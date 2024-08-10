<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title> @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/Logo/lll.png" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/min.css') }}" rel="stylesheet">

    <!--<script src="{{ asset('js/min.js') }}"></script>-->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    <!-- Styles -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
