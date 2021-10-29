<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{asset('user/node_modules/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}" />
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

</head>

<body>
    {{$slot}}
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('user/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  {{-- <script src="{{asset('uset/js/misc.js')}}"></script> --}}
</body>

</html>