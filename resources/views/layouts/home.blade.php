<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="{{ asset('js/libs/jquery.js') }}"></script>
<script src="{{ asset('js/utils/ElementProperty.js') }}"></script>
<link rel="stylesheet" href="{{ asset('config/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/fonts/montserrat.css') }}">
<script src="{{ asset('config/main.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/materialize/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
<script src="{{ asset('js/libs/jquery.js') }}"></script>
<script src="{{ asset('js/utils/materialize.js') }}"></script>

<link rel="manifest" href="{{ asset('manifest.json') }}">
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA">
<link rel="icon" sizes="512x512" href="{{ asset('assets/images/logo/icon.png') }}">

<title>Imobiliária Rafael Ferreira</title>

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="PWA">
<link rel="apple-touch-icon" href="{{ asset('assets/images/logo/icon.png') }}">

<link href="{{ asset('images/icons/splash-640x1136.png') }}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-750x1334.png') }}" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1242x2208.png') }}" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1125x2436.png') }}" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-828x1792.png')  }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1242x2688.png') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1536x2048.png') }}" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1668x2224.png') }}" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1668x2388.png') }}" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-2048x2732.png') }}" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#267CCA">
<meta name="msapplication-TileImage" content="{{ asset('assets/images/logo/icon.png') }}">


<meta charset="utf-8" />
<meta name="theme-color" content="#267CCA">
<link rel="icon" href="{{ asset('assets/images/logo/icon.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


<meta name="description" content="Imobiliária em Juazeiro do Norte - Procurando por um imóvel no Crajubar? Encontre ótimas oportunidades de imóveis para locação em nosso site. Clique e confira!" />
<meta property="og:title" content="Rafael Ferreira Imóveis" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://imobiliaria.madgic.com.br/" />
<meta property="og:image" content="https://imobiliaria.madgic.com.br/assets/images/logo/icon.png" />
<meta property="og:description" content="Imobiliária em Juazeiro do Norte - Procurando por um imóvel no Crajubar?" />
<meta property="og:site_name" content="Rafael Ferreira Imóveis" />


<script src="{{ asset('js/libs/print.js') }}"></script>
<script src="{{ asset('js/service/Session.js') }}"></script>
<script src="{{ asset('js/libs/sweetalertmin.js') }}"></script>
<script src="{{ asset('js/utils/SwalCustom.js') }}"></script>
<script src="{{ asset('js/service/ConnectionServer.js') }}"></script>
<script src="{{ asset('js/service/Init.js') }}"></script>
<script src="{{ asset('js/utils/Mask.js') }}"></script>
<script src="{{ asset('js/service/MainServices.js') }}"></script>
<script src="{{ asset('js/utils/preloader.js') }}"></script>


<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('{{asset('serviceworker.js')}}', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>


<link href="{{ asset('css/home/init.css') }}" rel="stylesheet">
<link href="{{ asset('css/nav/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/sales/init.css') }}" rel="stylesheet">


@yield('content')



