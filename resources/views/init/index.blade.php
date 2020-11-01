@extends('layouts.home')

@section('content')
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
                <li><a class="waves-effect" href="#!">Contate-nos</a></li>
            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="" href="#test1">Sobre nós</a></li>
                <li class="tab"><a class="active" href="#test2">Vendas</a></li>
{{--                <li class="tab"><a href="#test3">Locação</a></li>--}}
                <li class="tab"><a href="#test4">Fale Conosco</a></li>
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
{{--    <div id="test3" class="col s12">--}}
{{--        @include('carousel.init')--}}
{{--        locação--}}
{{--    </div>--}}
    <div id="test4" class="col s12">
        @include('contact.index')
    </div>

    <footer style="background-color: #CB5929" class="page-footer">
        <div class="container">
            <div class="row col l12 m12 s12">
                <div class="col l4 s12">
                    <p class="image">
                        <img width="150vw" src="{{ asset('assets/images/logo/logo.png') }}">
                    </p>
                    <p class="links">
                        <a target="_blank" class="grey-text text-lighten-3" href=https://api.whatsapp.com/send?phone=5511953259744"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/imobiliariacanuto/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a target="_blank" class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <a target="_blank" class="grey-text text-lighten-3" href="https://twitter.com/canutoimoveis"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <a target="_blank" class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCqEmoL3UIp4QNMfadKbzEuw"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </p>
                    <p class="grey-text text-lighten-4 mobile-center">
                        Imobiliária especializada em Vendas e Locações de Imóveis nos melhores bairros da cidade
                    </p>
                </div>
                <div class="col l4 s12 ">
                    <h4 class="mobile-center">Mapa do site</h4>
                    <ul class="text-center-mobile">
                        <li><a href="" class="white-text">Sobre nós</a></li>
                        <li><a href="" class="white-text">Vendas</a></li>
                        <li><a href="" class="white-text">Fale conosco</a></li>
                    </ul>
                </div>
                <div class="col l4 s12">
{{--                    <h5 class="white-text">Links</h5>--}}
{{--                    <ul>--}}
{{--                        <li><a target="_blank" class="grey-text text-lighten-3" href=https://api.whatsapp.com/send?phone=5511953259744"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/imobiliariacanuto/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a target="_blank" class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a target="_blank" class="grey-text text-lighten-3" href="https://twitter.com/canutoimoveis"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCqEmoL3UIp4QNMfadKbzEuw"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>--}}
{{--                    </ul>--}}
                </div>
                <div class="row col s12 m12 l12">
                    <div class="center">
                        <h4>Onde estamos</h4>
                    </div>
                    <iframe class="col l12 s12 m12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1364324142482!2d-39.32555188522536!3d-7.225275294784053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a17fb218d86db1%3A0xd63fd82e4e577c96!2sImobili%C3%A1ria%20Canuto!5e0!3m2!1spt-BR!2sbr!4v1604256524645!5m2!1spt-BR!2sbr"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                © 2020 <a href="https://madgic.com.br" target="_blank" class="white-text">Madgic</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/modules/home/init.js') }}"></script>

@endsection
