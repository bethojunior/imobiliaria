@extends('layouts.home')

@section('content')
    <link href="{{ asset('css/nav/index.css') }}" rel="stylesheet">

    <nav class="nav-extended">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">
                <img class="logo" src="{{ asset('assets/images/logo/logo.png') }}">
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Contate-nos</a></li>
                <li><a href="/">Contate-nos</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li>
                    <div class="user-view">
                        <a><img width="150vw" src="{{ asset('assets/images/logo/logo.png') }}"></a>
                        <a><span class=" name">Imobiliária Canuto</span></a>
                        <a href="mailto:contato@imobiliariacanuto.com.br"><span class=" email">contato@imobiliariacanuto.com.br</span></a>
                    </div>
                </li>
{{--                <li><div class="divider"></div></li>--}}
                <li><a class="waves-effect" href="#!">Inicio</a></li>
                <li><a class="waves-effect" href="#!">Sobre nós</a></li>
                <li><a class="waves-effect" href="#!">Cotate-nos</a></li>
            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="" href="#test1">Sobre nós</a></li>
                <li class="tab"><a class="active" href="#test2">Vendas</a></li>
                <li class="tab"><a href="#test3">Locação</a></li>
                <li class="tab"><a href="#test4">Lançamentos</a></li>
            </ul>
        </div>
    </nav>
    <div id="test1" class="col s12">
        @include('carousel.init')
    </div>
    <div id="test2" class="col s12">
        @include('carousel.init')
        @include('sales.init')
    </div>
    <div id="test3" class="col s12">
        @include('carousel.init')
        locação
    </div>
    <div id="test4" class="col s12">
        @include('carousel.init')
        Lançamentos
    </div>

    <script src="{{ asset('js/modules/home/init.js') }}"></script>

@endsection
