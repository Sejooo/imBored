<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {{--
  <link href="/css/app.css" rel="stylesheet"> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  {{-- Script --}}
  <script src="{{ mix('/js/app.js') }}"></script>
  {{-- <script type="text/javascript" src="/js/app.js"></script> --}}
  <title>i´m Bored</title>

</head>

<body class="bg-green-100">
  <x-header._header />

  
  {{$slot}}


  <x-footer._footer />
</body>

</html>


{{--

Bored API
https://www.boredapi.com/documentation

ALPINE.JS
https://alpinejs.dev
https://github.com/alpinejs/alpine/tree/v2.8.2

Laravel
https://laravel.com/docs/9.x/installation

Tailwind
https://tailwindcss.com/docs/guides/laravel

--}}