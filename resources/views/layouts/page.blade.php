@extends('adminlte::page')
<link rel="manifest" href="{{ asset('manifest.json') }}">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="msapplication-starturl" content="/">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/default/config.css') }}">
<link rel="stylesheet" href="{{ asset('config/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/config/print.css') }}">
<link rel="stylesheet" href="{{ asset('fileinput/css/fileinput.css') }}">
@section('title')
    @yield('page-title')
@endsection
@section('content_header')
    @include('includes.alerts')
@endsection
<script src="{{ asset('config/main.js') }}"></script>
<script src="{{ asset('js/libs/jquery.js') }}"></script>
<script src="{{ asset('fileinput/js/fileinput.js') }}"></script>
<script src="{{ asset('js/libs/print.js') }}"></script>
<script src="{{ asset('js/utils/ElementProperty.js') }}"></script>
<script src="{{ asset('js/service/Session.js') }}"></script>
<script src="{{ asset('js/libs/sweetalertmin.js') }}"></script>
<script src="{{ asset('js/utils/SwalCustom.js') }}"></script>
<script src="{{ asset('js/service/ConnectionServer.js') }}"></script>
<script src="{{ asset('js/service/Init.js') }}"></script>
<script src="{{ asset('js/utils/Mask.js') }}"></script>
<script src="{{ asset('js/service/MainServices.js') }}"></script>
<script src="{{ asset('js/utils/preloader.js') }}"></script>


