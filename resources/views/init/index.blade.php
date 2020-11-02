@extends('layouts.home')

@section('content')
    <!-- nav mobile -->
    <ul id="slide-out" class="side-nav  mobile-only">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#!">First</a></li>
                            <li><a href="#!">Second</a></li>
                            <li><a href="#!">Third</a></li>
                            <li><a href="#!">Fourth</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="right hide-on-med-and-down  mobile-only">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">First</a></li>
            <li><a href="#!">Second</a></li>
            <li><a href="#!">Third</a></li>
            <li><a href="#!">Fourth</a></li>
        </ul>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse  mobile-only">
        <i class="material-icons">menu</i>
        <div class="center">
            <img width="100vw" src="{{ asset('assets/images/logo/logo.png') }}">
        </div>
    </a>

    <!-- nav mobile -->

    <nav class="mobile-none">
        <div class="nav-wrapper row col l12 ">
            <div class="col l6">
                <span><i class="fa fa-phone" aria-hidden="true"></i> 88 3511-0929 / 3587-1857</span>
                <span class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i> contato@madgic.com.br</span>
            </div>
            <div class="col l6 relative">
                <a target="_blank" class="grey-text text-lighten-3" href="#!"><i class="social fa fa-facebook" aria-hidden="true"></i></a>
                <a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/imobiliariacanuto/"><i class="social fa fa-instagram" aria-hidden="true"></i></a>
{{--                <span><i class="fa fa-info-circle" aria-hidden="true"></i> Agora ficou fácil</span>--}}
                <button class="add-imovel">Anuncie seu imovel conosco</button>
            </div>
        </div>
    </nav>

    <nav class="main-nav">
        <div class="nav-wrapper row col l12">
            <div class="col l4">
                <a href="#" class="brand-logo">
                    <img width="100vw" src="{{ asset('assets/images/logo/rafael-white.png') }}">
                </a>
            </div>
            <div class="col l8">
{{--                <span><a href="">Home</a></span>--}}
                <span><a href="">Quem Somos</a></span>
                <span><a href="">Venda</a></span>
                <span><a href="">Locação</a></span>
                <span><a href="">Lançamentos</a></span>
                <span><a href="">Contato</a></span>
            </div>

        </div>
    </nav>


    @include('carousel.init')
    @include('sales.init')



<footer style="background-color: #267CCA" class="page-footer">
        <div class="container">
            <div class="row col l12 m12 s12">
                <div class="col l4 s12">
                    <p class="image">
                        <img width="150vw" src="{{ asset('assets/images/logo/rafael-white.png') }}">
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
