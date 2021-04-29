<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Starking 7</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>



        /* Override bootstrap column paddings */
        .tz-gallery .row > div {
            padding: 2px;
        }

        .tz-gallery .lightbox2 img {
            width: 100%;
            border-radius: 0;
            position: relative;
        }

        .tz-gallery .lightbox2:before {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -13px;
            margin-left: -13px;
            opacity: 0;
            color: #fff;
            font-size: 26px;
            font-family: 'Glyphicons Halflings';
            content: '\e003';
            pointer-events: none;
            z-index: 9000;
            transition: 0.4s;
        }


        .tz-gallery .lightbox2:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: rgba(46, 132, 206, 0.7);
            content: '';
            transition: 0.4s;
        }

        .tz-gallery .lightbox2:hover:after,
        .tz-gallery .lightbox2:hover:before {
            opacity: 1;
        }

        .baguetteBox-button {
            background-color: transparent !important;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/video.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/progess.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

    {{--    <link rel="stylesheet"  href="{{asset('css/colors/switch.css')}}">--}}
    {{--    <link href="{{asset('css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css" title="color-2">--}}
    {{--    <link href="{{asset('css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css" title="color-3">--}}
    {{--    <link href="{{asset('css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css" title="color-4">--}}
    {{--    <link href="{{asset('css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css" title="color-5">--}}
    {{--    <link href="{{asset('css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css" title="color-6">--}}
    {{--    <link href="{{asset('css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css" title="color-7">--}}
    {{--    <link href="{{asset('css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css" title="color-8">--}}
    {{--    <link href="{{asset('css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css" title="color-9">--}}
<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '895171401336590');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=895171401336590&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
<div id="app">
    @yield('preloader')


{{--<div id="switch-color" class="color-switcher">--}}
{{--    <div class="open"><i class="fas fa-cog fa-spin"></i></div>--}}
{{--    <h4>COLOR OPTION</h4>--}}
{{--    <ul>--}}
{{--        <li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-6" onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-7" onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-8" onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--        <li><a class="color-9" onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>--}}
{{--    </ul>--}}
{{--    <button class="switcher-light">WIDE </button>--}}
{{--    <button class="switcher-dark">BOX </button>--}}
{{--    <a class="rtl-v" href="RTL_Genius/index.html">RTL </a>--}}
{{--</div>--}}


<!-- Start of Header section
		============================================= -->
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <strong>Gracias por contactar con nosotros!</strong> Su mensaje fue enviado satisfactoriamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
<header class="header_3 gradient-bg-header">
    <div class="container">
        <div class="navbar-default">
            <div class="navbar-header float-left">
                <a class="navbar-brand text-uppercase" href="/"><img src="{{asset('img/blog/logo-starking-s.png')}}" width="310" alt="logo"></a>
            </div><!-- /.navbar-header -->
            <div class="header-info ul-li">
                <ul>
                    <li>
                        <div class="mail-phone">
                            <div class="info-icon">
                                <i class="text-gradiant fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-id">gerenciatic@starking7.com</span>
                                <span class="info-text">Envíenos un correo electrónico</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mail-phone">
                            <div class="info-icon">
                                <i class="text-gradiant fas fa-phone-square"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-id"><a href="https://api.whatsapp.com/send?phone=51932295953" target="_blank" class="info-id">932 295953</a></span>
                                <span class="info-text">Para más información</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="https://web.facebook.com/starking7sac" target="_blank">
                            <div class="info-social">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span class="info-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/starking7inversiones" target="_blank">
                            <div class="info-social">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <span class="info-text">Instagram</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="nav-menu-4">
                <div class="login-cart-lang float-right ul-li">
                    <ul class="search_cart">
                        <li class="login">
                            <a href="#contacto">
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <nav class="navbar-menu float-left">
                    <div class="nav-menu ul-li">
                        <ul class="quick-menu">
                            <li class="menu-item-has-children ul-li-block">
                                <a href="#!">Formación Integral</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('landingbim')}}">BIM en edificaciones</a></li>
                                    <li><a href="{{route('landingpmi')}}">Lean Agile Project Management</a></li>
                                </ul>
                            </li>
                            <li><a href="/#cursos">Cursos</a></li>
                            <li><a href="/#certificacion-global">Certificación Global</a></li>
                            <li><a href="{{route('construccion')}}">Construcción y Bienes Raíces</a></li>
                            <li><a href="{{route('metodos_pagos')}}">Métodos de Pago</a></li>
                            <li><a href="{{route('about')}}">Nosotros</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="altranative-header ul-li-block">
    <div id="menu-container">

        <div class="menu-wrapper">
            <div class="row">

                <button type="button" class="alt-menu-btn float-left">
                    <span class="hamburger-menu"></span>
                </button>

                <div class="logo-area">
                    <a href="/">
                        <img src="{{asset('img/blog/logo-starking-s.png')}}" alt="Logo_not_found" width="300">
                    </a>
                </div>

            </div>
        </div>

        <ul class="menu-list accordion" style="left: -100%;">
            <li class="card">
                <a class="menu-link" href="/">Inicio</a>
            </li>

            <!-- services - start -->
            <li class="card active">
                <div class="card-header" id="heading1">
                    <button class="menu-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Formación Integral
                    </button>
                </div>
                <ul id="collapse1" class="submenu collapse show" aria-labelledby="heading1" data-parent="#accordion" style="">
                    <li class="active"><a href="{{route('landingbim')}}">BIM en edificaciones</a></li>
                    <li><a href="{{route('landingpmi')}}">Lean Agile Project Management</a></li>
                </ul>
            </li>
            <!-- services - end -->

            <li class="card">
                <a class="menu-link" href="/#cursos">Cursos</a>
            </li>

            <li class="card">
                <a class="menu-link" href="/#certificacion-global">Certificación Global</a>
            </li>

            <li class="card">
                <a class="menu-link" href="{{route('construccion')}}">Construcción y bienes raíces</a>
            </li>

            <li class="card">
                <a class="menu-link" href="{{route('about')}}">Nosotros</a>
            </li>

        </ul>
    </div>
</div>


@yield('content')

<!-- Start Of scound contact section
    ============================================= -->
<section id="contacto" class="contact_secound_section backgroud-style">
    <div class="container">
        <div class="contact_secound_content mt-sm-5 pt-sm-5">
            <div class="row mt-sm-5">
                <div class="col-md-6 d-none d-sm-flex">
                    <div class="contact-left-content">
                        <div class="section-title  mb45 headline text-left">
                            <span class="subtitle ml42  text-uppercase">CONTÁCTENOS</span>
                            <h2><span>Ponerse en contacto</span></h2>
{{--                            <p>--}}
{{--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                            </p>--}}
                        </div>

                        <div class="contact-address">
                            <div class="contact-address-details">
                                <div class="address-icon relative-position text-center float-left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="address-details ul-li-block">
                                    <ul>
                                        <li><span>Principal: </span>Av. Micaela Bastidas 258 Of. 606 Edificio El Roble Wanchaq, Cusco, Perú</li>
                                        <li><span>Sedes: </span>230 S Broad St. 17th floor, Of. 19, Philadelphia, PA, 19102, Estados Unidos</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="contact-address-details">
                                <div class="address-icon relative-position text-center float-left">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="address-details ul-li-block">
                                    <ul>
                                        <li><span>Principal: </span>932 295953</li>
{{--                                        <li><span>Sedes: </span>932 295953</li>--}}
                                    </ul>
                                </div>
                            </div>

                            <div class="contact-address-details">
                                <div class="address-icon relative-position text-center float-left">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="address-details ul-li-block">
                                    <ul>
                                        <li><span>Principal: </span>gerencia@starking7.com</li>
                                        {{--                                        <li><span>Second: </span>mail@genius.info</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact_secound_form">
                        <div class="section-title-2 mb65 headline text-left">
                            <h2>Envíenos un mensaje</h2>
                        </div>
                        <form class="contact_form"  method="post" action="{{route('formulario_path')}}">
                            @csrf
                            <div class="contact-info">
                                <input class="name" name="name" type="text" placeholder="Nombre completo." required>
                            </div>
                            <div class="contact-info">
                                <input class="email" name="email" type="email" placeholder="Email" required>
                            </div>
                            <textarea  name="mensaje" placeholder="Mensaje."></textarea>
                            <div class="nws-button text-center  gradient-bg text-capitalize">
                                <button type="submit" value="Submit">ENVIAR MENSAJE AHORA <i class="fas fa-caret-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_2 backgroud-style">
        <div class="container">
            <div class="back-top text-center mb45">
                <a class="scrollup text-warning" href="#">Ir Arriba</a>
            </div>
            <div class="footer_2_logo text-center">
                <img src="{{asset('img/blog/logo-starking-s.png')}}" alt="" width="300">
            </div>

            <div class="footer_2_subs text-center">
                <p>Nos tomamos muy en serio nuestra misión de brindar una educación de calidad.</p>
{{--                <div class="subs-form relative-position">--}}
{{--                    <form action="#" method="post">--}}
{{--                        <input class="course" name="course" type="email" placeholder="Email Address.">--}}
{{--                        <div class="nws-button text-center  gradient-bg text-uppercase">--}}
{{--                            <button type="submit" value="Submit">Subscribe Ahora</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
            <div class="copy-right-menu">
                <div class="row">
                    <div class="col-md-5">
                        <div class="copy-right-text">
                            <p>© 2021 - <a href="http://nebulaperu.com/" target="_blank">nebulaperu.com.</a> All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-social  text-center ul-li">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <div class="copy-right-menu-item float-right ul-li">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">License</a></li>--}}
{{--                                <li><a href="#">Privacy & Policy</a></li>--}}
{{--                                <li><a href="#">Term Of Service</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

        {{--    <div class="bg-primary p-3 text-white">--}}
        {{--        {{ session('status') }}--}}
        {{--    </div>--}}

<!-- ENd Of scound contact section
    ============================================= -->
<div id="redes">
    <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">
        <a href="https://api.whatsapp.com/send?phone=51932295953" target="_blank" class="font-weight-bold text-white stretched-link">
            Escríbenos por WhatsApp
            <img src="{{asset('img/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
        </a>
    </div>
</div>
</div>
<!-- For Js Library -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jarallax.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/gmap3.min.js')}}"></script>
<script src="{{ mix('js/app.js') }}"></script>
{{--<script src="{{asset('js/switch.js')}}"></script>--}}
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

<script src="{{asset('js/script.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</body>
</html>
