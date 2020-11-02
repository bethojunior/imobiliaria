@extends('layouts.home')

@section('content')
    <!-- nav mobile -->
    <ul id="slide-out" class="side-nav  mobile-only">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="{{ asset('assets/images/middle_ground.jpg') }}">
                </div>
                <a href="#!user"><img width="100vw" src="{{ asset('assets/images/logo/rafael-white.png') }}"></a>
                <a href="#!name"><span class="white-text name">Rafael Ferreira Imoveis</span></a>
                <a href="#!name"><span class="white-text name">&nbsp;</span></a>
{{--                <a href="mailto:drajessycamartins@gmail.com"><span class="white-text email">Drajessycamartins@gmail.com</span></a>--}}
            </div></li>
        <li><a href="/">Home</a></li>
        <li><div class="divider"></div></li>
        <li><a id="">Vendas</a></li>
        <li><a id="">Contato</a></li>


        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header">Redes sociais<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <a target="_blank" class="main-color text-lighten-3" href=https://api.whatsapp.com/send/?phone=558899651575&text&app_absent=0"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            <a target="_blank" class="main-color text-lighten-3" href="https://www.instagram.com/rafael_ferreira_imoveis/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a target="_blank" class="main-color text-lighten-3" href="https://www.facebook.com/761384800592861/posts/2826210050776982/?d=n"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a target="_blank" class="main-color text-lighten-3" href="https://www.youtube.com/watch?v=4Z7eNCZIoWA&feature=youtu.be"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse  mobile-only">
        <i class="material-icons btn-nav">menu</i>
        <div class="center">
            <img width="100vw" src="{{ asset('assets/images/logo/logo.png') }}">
        </div>
    </a>

    <!-- nav mobile -->

    <nav class="mobile-none">
        <div class="nav-wrapper row col l12 ">
            <div class="col l6">
                <span><i class="fa fa-phone" aria-hidden="true"></i> 88 9965-1575</span>
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
                        <a target="_blank" class="grey-text text-lighten-3" href=https://api.whatsapp.com/send/?phone=558899651575&text&app_absent=0"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/rafael_ferreira_imoveis/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/761384800592861/posts/2826210050776982/?d=n"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a target="_blank" class="grey-text text-lighten-3" href="https://www.youtube.com/watch?v=4Z7eNCZIoWA&feature=youtu.be"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </p>
                    <p class="grey-text text-lighten-4 mobile-center">
                        Rafael Ferreira imóveis
                        CRECI 11.219
                    </p>
                    <p>Imobiliária especializada em Vendas e Locações de Imóveis nos melhores bairros da cidade</p>
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
                    <iframe class=" col s12 m12 l12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.949823649858!2d-39.3161629852252!3d-7.246551094769027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a1825f2a45abb1%3A0x42827b689560e098!2sRAFAEL%20FERREIRA%20IM%C3%93VEIS!5e0!3m2!1spt-BR!2sbr!4v1604341528395!5m2!1spt-BR!2sbr" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
