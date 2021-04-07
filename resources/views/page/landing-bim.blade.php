@extends('layouts.default')
@section('content')
    <!-- Start of about us section
		============================================= -->
    <section id="slide" class="slider-section">
        <div id="slider-item-landing" class="slider-item-details">
            <div class="slider-area slider-bg-5 relative-position">
                <div class="slider-text">
                    <div class="section-title mb20 headline text-center ">
                        <div class="layer-1-3">
                            <div class="section-title mb45 headline text-center">
                                <span class="subtitle text-uppercase">PROGRAMA INTERNACIONAL</span>
                            </div>
                            <h2 class="third-slide mb-sm-3"><span>BIM EN EDIFICACIONES</span></h2>
                            <p class="text-white d-none d-sm-block">En Starking7 lograrás la mejor preparación para los desafíos en la construcción mediante una formación en BIM del mas alto nivel, ya que contamos con un equipo de BIM Managers e instructores internacionales certificados de Autodesk impartiendo una enseñanza de primer nivel en BIM, lo cual garantiza un nivel de aprendizaje de las más altas esferas.</p>
                            <p class="text-white d-none d-sm-block">Alcanzarás el “Autodesk Certified Professional ACP” y “Autodesk Certified User ACU”: las certificaciones de mayor prestigio a nivel mundial que acreditan el dominio de Software para la aplicación de la Metodología BIM.</p>
                        </div>
                    </div>
                    <div class="layer-1-2 mt-5">
                        <div class="coming-countdown ul-li">
                            <p class="text-warning small mt-3 font-weight-bold">APROVECHA LA PREVENTA CON UN 20% DE DESCUENTO HASTA EL 10 DE ABRIL</p>
                            <ul>
                                <li class="days">
                                    <span class="number"></span>
                                    <span class>Días</span>
                                </li>

                                <li class="hours">
                                    <span class="number"></span>
                                    <span class>Horas</span>
                                </li>

                                <li class="minutes">
                                    <span class="number"></span>
                                    <span class>Minutos</span>
                                </li>

                                <li class="seconds">
                                    <span class="number"></span>
                                    <span class>Segundos</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="sponsor" class="sponsor-section sponsor-2">
                        <div class="container">
                            <div class="" id="sponsor-item-landing">
                                <div class="sponsor-pic text-center">
                                    <img src="{{asset('img/sponsor/certiport.png')}}" alt="" class="w-100">
                                </div>
                                <div class="sponsor-pic text-center ">
                                    <img src="{{asset('img/sponsor/autodesk-white.png')}}" alt="" class="w-100">
                                </div>
                                <div class="sponsor-pic text-center">
                                    <img src="{{asset('img/sponsor/colegio.png')}}" alt="" class="w-100">
                                </div>
                                <div class="sponsor-pic text-center">
                                    <img src="{{asset('img/logo/logo-starking-s.png')}}" alt="" class="w-100 pt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="slider-area slider-bg-5 relative-position">--}}
{{--                <div class="slider-text">--}}
{{--                    <div class="section-title mb20 headline text-center ">--}}
{{--                        <span class="subtitle text-uppercase">FORMACIÓN INTEGRAL</span>--}}
{{--                        --}}{{--                    <h2 class=""  ><span>Inventive</span> Solution <br> for <span>Education</span></h2>--}}
{{--                        <h2><span>BIM</span> Solución <br> para <span>Construccines</span></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- End of about us section
        ============================================= -->
    <section class="d-sm-none ">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <p class="">En Starking7 lograrás la mejor preparación para los desafíos en la construcción mediante una formación en BIM del mas alto nivel, ya que contamos con un equipo de BIM Managers e instructores internacionales certificados de Autodesk impartiendo una enseñanza de primer nivel en BIM, lo cual garantiza un nivel de aprendizaje de las más altas esferas.</p>
                    <img src="{{asset('img/banner/fondo-bim-p.jpg')}}" alt="" class="d-block w-100 mb-2">
                    <p class="">Alcanzarás el “Autodesk Certified Professional ACP” y “Autodesk Certified User ACU”: las certificaciones de mayor prestigio a nivel mundial que acreditan el dominio de Software para la aplicación de la Metodología BIM.</p>


                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq-section faq-secound-home-version backgroud-style">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
                <h2>BENEFICIOS<span> EXCLUSIVOS</span></h2>
            </div>

            <div class="faq-tab mb45">
                <div id="accordion" class="panel-group">
                    <div class="panel">
                        <div class="panel-title" id="headingOne">
                            <h3 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-user-plus"></i> Docentes Internacionales
                                </button>
                            </h3>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body p-0">
                                BIM Managers, Profesionales e Instructores Certificados de Autodesk altamente calificados de la ciudad de Buenos Aires, Argentina y un equipo de ingeniería y soporte técnico constante.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingTwo">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-globe"></i> Certificacion global: Autodesk Certified Professional y Autodesk Certified User
                                </button>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body p-0">
                                Podrás lograr la certificaciones de Autodesk más reconocidas a nivel mundial, potenciando tus habilidades al mas alto nivel; asimismo, tu nombre podrá figurar en la página oficial  de profesionales y usuarios certificados de Autodesk.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingThree">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-file-alt"></i> Certificacion del Colegio de Ingenieros del Perú
                                </button>
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body p-0">
                                Gracias a nuestro convenio, podrás obtener certificados a nombre del Colegio de Ingenieros del Perú Consejo departamental Cusco, válidos a nivel nacional, que incluyen una codificación y la firma del Decano de dicha Institución.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingFoure">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
                                    <i class="fas fa-chart-bar"></i> Nivel avanzado en BIM
                                </button>
                            </h3>
                        </div>
                        <div id="collapseFoure" class="collapse"  data-parent="#accordion">
                            <div class="panel-body p-0">
                                Aprenderás desde cero hasta un nivel avanzado de la Metodología BIM en 160 horas, mas practicas calificadas, equivalentes a 4 meses de aprendizaje. La mejor preparación para el examen ”Autodesk Certified Professional – ACP y Autodesk Certified User – ACU”.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-title" id="headingFoure">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class="fas fa-play"></i> Transmisiones en vivo
                                </button>
                            </h3>
                        </div>
                        <div id="collapse5" class="collapse"  data-parent="#accordion">
                            <div class="panel-body p-0">
                                Clases virtuales en vivo, con interacción, asesoría y monitoreo constante por nuestros docentes.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingFoure">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <i class="fas fa-cloud"></i> Plataforma de almacenamiento
                                </button>
                            </h3>
                        </div>
                        <div id="collapse6" class="collapse"  data-parent="#accordion">
                            <div class="panel-body p-0">
                                Campus virtual a tu disposición en el cual se graban todas las clases, de tal manera que no te perderás de ninguna y podrás repasar el material didáctico en cualquier momento y lugar.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingFoure">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <i class="fas fa-users"></i> Comunidad BIM
                                </button>
                            </h3>
                        </div>
                        <div id="collapse7" class="collapse"  data-parent="#accordion">
                            <div class="panel-body p-0">
                                Podrás ser parte de un grupo selecto de especialistas BIM con acceso privado a archivos, familias Revit, información relevante y contenido valioso que podrás descargar y compartir de manera gratuita, así como contactos con profesionales BIM en diferentes países.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-btn text-center">
                {{--            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">--}}
                {{--                <a href="#">Make Question <i class="fas fa-caret-right"></i></a>--}}
                {{--            </div>--}}
                <p class="text-warning h5 font-weight-normal">Ofrecemos una gama de modalidades y certificaciones de acuerdo a tus posibilidades e intereses…
                    tenemos una gran variedad de opciones para ti.</p>
                <p class="text-warning h5 font-weight-normal">¡Estamos seguros que con todos estos beneficios te esperan grandes oportunidades! <b>¡No te quedes fuera!</b></p>
            </div>
        </div>
    </section>

    <!-- Start of best course
		============================================= -->
    <section id="best-course" class="best-course-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span>PODRÁS DESTACAR LOGRANDO ESTAS CERTIFICACIONES</span></h2>
            </div>
            <div class="best-course-area mb45">
                <div class="row">
                    <div class="col-md-4">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/course/cer1.jpg')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Exclusivo</span>
                                </div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
{{--                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>--}}
                                    <p>3 certificados por módulo de Starking7 en convenio con el Colegio de Ingenieros del Perú
                                        (válidos a nivel nacional - Perú</p>
                                </div>
                                <div class="course-meta">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('img/sponsor/ST7.png')}}" alt="" class="w-100">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('img/sponsor/colegio.png')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/course/cer2.jpg')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Exclusivo</span>
                                </div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    {{--                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>--}}
                                    <p>“Autodesk Certified User”
                                        ACU,
                                        Revit Architecture
                                        + Insignia Digital
                                        (certificación válida a nivel mundial)
                                    </p>
                                </div>
                                <div class="course-meta">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('img/sponsor/autodesk.png')}}" alt="" class="w-100">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('img/sponsor/r2.png')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/course/cer3.jpg')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Exclusivo</span>
                                </div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    {{--                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>--}}
                                    <p>“Autodesk Certified Professional”
                                        ACP,
                                        Revit Architecture
                                        + Insignia Digital
                                        (certificación de mayor prestigio en
                                        modelado BIM a nivel mundial)
                                    </p>
                                </div>
                                <div class="course-meta">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('img/sponsor/autodesk.png')}}" alt="" class="w-100">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('img/sponsor/r1.png')}}" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>*Todos los certificados se entregan previa evaluación de conocimientos y prácticas calificadas.</p>
        </div>
    </section>
    <!-- /course-categori -->
    <!-- End of best course
        ============================================= -->

    <!-- Start why choose section
		============================================= -->
    <section id="why-choose" class="why-choose-section version-four backgroud-style">
        <div class="container">
            <div class="section-title mb65 headline text-center">
                <span class="subtitle text-uppercase mb25 d-none d-sm-inline">¡CERTIFICATE A NIVEL MUNDIAL!</span>
                <span class="subtitle text-uppercase mb25 d-sm-none">¡CERTIFICATE A <br>NIVEL MUNDIAL!</span>
                <h2 class="mt-5"><span>AUTODESK CERTIFIED PROFESSIONAL – ACP <br>
                    AUTODESK CERTIFIED USER – ACU</span></h2>
            </div>
            <div class="extra-features-content">
                <div class="row align-items-end">
                    <div class="col-md-4 col-sm-6">
                        <div class="extra-left">

                            <div class="extra-left-content">
                                <div class="extra-icon-text text-right">
                                    <div class="features-icon gradient-bg text-center">
                                        <i class="flaticon-ruler-and-pencil"></i>
                                        <div class="feat-tag">
                                            <span>01</span>
                                        </div>
                                    </div>
                                    <div class="features-text pt25">
                                        <div class="features-text-title text-right pb10">
                                            <h3>Demuestra sus habilidades para el futuro.</h3>
                                        </div>
                                        <div class="features-text-dec text-right">
                                            <span>La competencia por el talento es feroz. Los empleadores quieren atraer y retener profesionales cualificados y ambiciosos que impulsen la innovación. Autodesk proporciona certificaciones reconocidas por la industria para ayudarlo a capacitarse para el futuro de su industria.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- // extra-left-content -->

                            <div class="extra-left-content">
                                <div class="extra-icon-text">
                                    <div class="features-icon gradient-bg text-center">
                                        <i class=" flaticon-clipboard-with-pencil"></i>
                                        <div class="feat-tag">
                                            <span>02</span>
                                        </div>
                                    </div>
                                    <div class="features-text pt25">
                                        <div class="features-text-title">
                                            <h3>Comparte tu certificación oficial de Autodesk.</h3>
                                        </div>
                                        <div class="features-text-dec">
                                            <span>Has obtenido con éxito una certificación de Autodesk, ¿qué sigue? Agrega tu certificación oficial y tu insignia digital a tu currículum, portafolio y sitios de redes profesionales. ¡Muestra a tus compañeros tu logro!.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // extra-left-content -->

                            <!-- // extra-left-content -->
                        </div><!-- /extra-left -->


                        <!-- Modal -->
                        <div class="modal fade" id="r2b" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4 class="text-dark mb-3">Autodesk Certified Professional – ACP (Profesional Certificado por Autodesk)</h4>
                                        <p>Certificado de validez a nivel mundial que destacan las habilidades avanzadas de los profesionales  los cuales pueden resolver desafíos complejos en el flujo de trabajo y el diseño. La certificación profesional destaca un conjunto completo de habilidades y ayuda a los candidatos a destacarse en un mercado laboral competitivo. En el caso de la construcción, logrando el ACP de Revit Architecture, se obtienen los credenciales del mas alto nivel en el dominio del software para la aplicación de la Metodología BIM.</p>
                                        <p>Este certificado cuenta con un código digital personal inscrito en la página de profesionales certificados de Autodesk, asimismo con la firma del CEO de la Compañía Autodesk.</p>
                                        <img src="{{asset('img/course/cer3.jpg')}}" alt="" class="w-100">
                                        <p class="font-italic">Autodesk Certified es la única Certificación Internacional avalada por Autodesk, la cual puede ser verificada y descargada desde la pagina web de Profesionales Certificados de Autodesk – Certiport.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="r1v" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4 class="text-dark mb-3">Autodesk Certified User – ACU (Usuario Certificado por Autodesk)</h4>
                                        <p>La certificación Autodesk Certified User (ACU) también es una credencial reconocida por la industria a nivel internacional, que impulsa de manera efectiva las carreras de los estudiantes como ingenieros, arquitectos y creadores. Mejora las aplicaciones y los currículums de educación superior de los estudiantes al proporcionar evidencia de competencia y competencia. Del mismo modo, el ACU de Revit demuestra el conocimiento fundamental usando el software de modelado de información de edificios (BIM) para las carreras de arquitectura, ingeniería, diseño de interiores y gestión de la construcción.</p>
                                        <p>Asimismo, este certificado registra un código digital personal inscrito en la página de usuarios certificados de Autodesk que también incluye la firma del CEO de la Compañía Autodesk.</p>
                                        <img src="{{asset('img/course/cer2.jpg')}}" alt="" class="w-100">
                                        <p class="font-italic">Autodesk Certified es la única Certificación Internacional avalada por Autodesk, la cual puede ser verificada y descargada desde la pagina oficial de Usuarios Certificados de Autodesk – Certiport.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col-sm-3 -->

                    <div class="col-sm-4">
                        <div class="extra-pic text-center">
                            <img src="{{asset('img/banner/wc-2.png')}}" alt="img">
                        </div>
                    </div>
                    <!-- /col-sm-6 -->

                    <div class="col-md-4 col-sm-6">
                        <div class="extra-right">
                            <div class="extra-left-content">
                                <div class="extra-icon-text text-left">
                                    <div class="features-icon gradient-bg text-center">
                                        <i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                                        <div class="feat-tag">
                                            <span>03</span>
                                        </div>
                                    </div>
                                    <div class="features-text">
                                        <div class="features-text-title">
                                            <h3>Destaca con una certificación de Autodesk.</h3>
                                        </div>
                                        <div class="features-text-dec">
                                            <span>Obtén una credencial reconocida en la industria que muestre su talento.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- // extra-left-content -->


                            <div class="extra-left-content">
                                <div class="extra-icon-text text-right">
                                    <div class="features-icon gradient-bg text-center">
                                        <i class="flaticon-clipboards"></i>
                                        <div class="feat-tag">
                                            <span>04</span>
                                        </div>
                                    </div>
                                    <div class="features-text pt25">
                                        <div class="features-text-title text-right pb10">
                                            <h3>Demuestra tus conocimientos. Avanza en tus metas profesionales.</h3>
                                        </div>
                                        <div class="features-text-dec text-right">
                                            <span>Autodesk ofrece dos niveles de certificación: ACP y ACU, comience a destacar sus habilidades.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="extra-left-content mb-5">
                                <button type="button" class="btn btn-warning btn-block mb-2" data-toggle="modal" data-target="#r2b"><img src="{{asset('img/logo/r2-b.png')}}" alt="" width="40"> Autodesk Certified Professional (ACP)</button>
                                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#r1v"><img src="{{asset('img/logo/r1-v.png')}}" alt="" width="40"> Autodesk Certified User (ACU)</button>
                            </div>

                            <!-- // extra-left-content -->
                        </div><!-- /extra-left -->
                    </div>
                    <!-- /col-sm-3 -->
                </div><!-- /row -->
            </div>
        </div>
    </section>
    <!-- End why choose section
        ============================================= -->

    <!-- Start of best course
		============================================= -->
    <section id="best-course" class="best-course-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">ESTRUCTURA DEL PROGRAMA DE ESPECIALIZACION</span>
                <h2><span>BIM EN EDIFICACIONES</span></h2>
                <p>El Programa está estructurado para alcanzar desde el nivel básico de Modelador BIM hasta el nivel avanzado de Gestión y Presupuestos BIM en Edificaciones, tal como se muestra a continuación:
                </p>
            </div>
            <div class="affiliate-market-guide mb65">
                <div class="section-title-2 mb20 headline text-left">
                    <h2><span>RESUMEN DE MODULOS</span></h2>
                </div>

                <div class="affiliate-market-accordion">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-title" id="headingOne">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseA" aria-expanded="true" aria-controls="collapseA">
                                        <span>01</span>	MÓDULO 1: Revit Arquitectura
                                    </button>
                                    <div class="leanth-course">
                                        <span>60 hORAS</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseA" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <img src="{{asset('img/course/curso-a.jpg')}}" alt="" width="500" class="float-right p-3">
                                    <p>En este curso se conocerán muchas herramientas para modelar una edificación de en todas sus etapas de desarrollo desde el nivel básico hasta avanzado. También este curso se establece como base para el resto de disciplinas de Revit: Estructuras y MEP. En este curso se enseñan todas las herramientas de REVIT y sobre todo se crean retos para que el alumno los solucione. Este curso se enfoca especialmente en edificios arquitectónicos y está diseñado para la preparación y reforzamiento de los alumnos para obtener el Autodesk Certified Professional - ACP y/o Autodesk Certified User - ACU, los cuales se rinden en nuestro Centro de Pruebas Certiport del cual se tienen hasta dos oportunidades para su aprobación. Duración del curso: 60 horas.</p>
                                    <h4>Resumen</h4>
                                    <p>Módulo Revit Arquitectura: 60 Horas</p>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <ul>
                                                <li>1.1: Introducción y Conociendo el Software.</li>
                                                <li>1.2: Topografías y Plataformas.</li>
                                                <li>1.3: Niveles, Rejillas y Muros.</li>
                                                <li>1.4: Suelos, Techos y Cubiertas</li>
                                                <li>1.5: Muro Cortina I.</li>
                                                <li>1.6: Herramientas De Circulación, Puertas Y Ventanas.</li>
                                                <li>1.7: Familias de Sistema y Cargables.</li>
                                                <li>1.8: Orientación Del Proyecto Y Estudio Solar.</li>
                                                <li>1.9: Materiales.</li>
                                                <li>1.10: Infografías Y Renders.</li>
                                                <li>1.11: Documentación Gráfica.</li>
                                                <li>1.12: Elementos del Plano.</li>
                                                <li>1.13: Mediciones, Exportar e Imprimir Planos I:</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li>1.14: Familias Insitu.</li>
                                                <li>1.15: Practica Calificada I.</li>
                                                <li>1.16: Familia Mobiliario Paramétrico.</li>
                                                <li>1.17: Grupos de Modelo y Detalle.</li>
                                                <li>1.18: Trabajo Colaborativo Con Vínculos.</li>
                                                <li>1.19: Muro Cortina II.</li>
                                                <li>1.20: Montajes.</li>
                                                <li>1.21: Elementos Constructivos Avanzados, Piezas.</li>
                                                <li>1.22: Opciones de Diseño.</li>
                                                <li>1.23: Trabajo Colaborativo Con Subproyectos.</li>
                                                <li>1.24: Nubes de Puntos.</li>
                                                <li>1.25: Masas Conceptuales.</li>
                                                <li>1.26: Modelo Genérico Basado En Patrón Y Adaptativo.</li>
                                                <li>1.27:  Practica Calificada II.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingTwo">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseB" aria-expanded="true" aria-controls="collapseB">
                                        <span>02</span>	MÓDULO 2: Revit Estructura
                                    </button>
                                    <div class="leanth-course">
                                        <span>30 Horas</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseB" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <img src="{{asset('img/course/curso-b.jpg')}}" alt="" width="500" class="float-right p-3">
                                    <p>Este curso está orientado al aprendizaje del modelamiento de todo tipo de estructuras de Concreto y Acero, explicando cómo se utiliza la disciplina de Estructuras del cual ser precisa tener conocimientos teóricos de estructuras. Del mismo modo en el curso aprenderemos todos los conocimientos para poder modelar cualquier estructura compleja en Revit. Realizaremos distintos tipos detalles constructivos además de poner cargas estructurales en nuestro edificio, utilizar el modelo analítico avanzando en estructuras y armados. Duración del curso: 30 horas.</p>
                                    <h4>Resumen</h4>
                                    <div class="row w-100">
                                        <div class="col">
                                            <ul>
                                                <li>2.1: Edificio I Concreto.</li>
                                                <li>2.2: Empezar Proyecto Estructural</li>
                                                <li>2.3: Pilares Estructurales</li>
                                                <li>2.4: Cimentación Aislada.</li>
                                                <li>2.5: Cimentación de Muro y Losa de Cimentación</li>
                                                <li>2.6: Vigas de Concreto.</li>
                                                <li>2.7: Suelos Estructurales</li>
                                                <li>2.8: Escalera de Concreto.</li>
                                                <li>2.9: Armaduras en Concreto.</li>
                                                <li>2.10: Gestión del Proyecto, Fases.</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li>2.11: Documentación Técnica, Etiquetas I.</li>
                                                <li>2.12: Practica Calificada III.</li>
                                                <li>2.13: Edificio II Estructura Metálica.</li>
                                                <li>2.14: Pilares Metálicos.</li>
                                                <li>2.15: Vigas Metálicas y Losas Aligeradas.</li>
                                                <li>2.16: Tornapuntas.</li>
                                                <li>2.17 Sistema de Vigas.</li>
                                                <li>2.18: Conexiones Estructurales</li>
                                                <li>2.19:  Exportar e Imprimir Planos II.</li>
                                                <li>2.20:  Practica Calificada IV.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingThree">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseC" aria-expanded="true" aria-controls="collapseC">
                                        <span>03</span> MÓDULO 3: Revit MEP
                                    </button>
                                    <div class="leanth-course">
                                        <span>30 Horas</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseC" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <img src="{{asset('img/course/curso-c.jpg')}}" alt="" class="float-right p-3">
                                    <p>En el curso se conocerán las nociones básicas de las disciplinas que componen MEP: Mecánica, Electricidad y Fontanería a través de Revit. Explicaremos cómo se trabaja con archivos vinculados y trabajaremos con los elementos que forman un sistema MEP: Tuberías, Conductos, Cables, Aparatos y Equipos. Asimismo, se explicarán de todas las herramientas y la solución de retos MEP. Modificaremos elementos y conectaremos todos los elementos para comprobar si existen interferencias entre nuestro sistema y finalmente analizaremos cargas térmicas y eléctricas. Duración del curso: 30 horas.</p>
                                    <h4>Resumen</h4>
                                    <div class="row w-100">
                                        <div class="col">
                                            <ul>
                                                <li>3.1: Coordinación y Vinculación Entre Disciplinas.</li>
                                                <li>3.2: Espacios y Zonas.</li>
                                                <li>3.3: Sistemas de Fontanería (Agua, Desagüe y Ventilación).</li>
                                                <li>3.4: Creación de Familias MEP I .</li>
                                                <li>3.5:  Practica Calificada V.</li>
                                                <li>3.6: Sistemas de Eléctricos (Potencia e Iluminación).</li>
                                                <li>3.7: Creación de Familias MEP II.</li>
                                                <li>3.8:  Practica Calificada VI.</li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li>3.9:  Sistemas de Aire Acondicionado (Climatización).</li>
                                                <li>3.10: Creación de Familias MEP III.</li>
                                                <li>3.11:  Practica Calificada VII.</li>
                                                <li>3.12: Documentación Técnica, Etiquetas II.</li>
                                                <li>3.13: Piezas de Fabricación LOD 400.</li>
                                                <li>3.14: Tablas de Planificación MEP.</li>
                                                <li>3.15:  Exportar e Imprimir Planos III.</li>
                                                <li>3.16:  Practica Calificada VIII.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseD" aria-expanded="true" aria-controls="collapseD">
                                        <span>04</span>	MÓDULO 4: NavisWorks
                                    </button>
                                    <div class="leanth-course">
                                        <span>20 Horas</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseD" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <img src="{{asset('img/course/curso-d.jpg')}}" alt="" class="p-3 float-right">
                                    <p>En este curso generaremos un único modelo BIM que integrará las distintas disciplinas del proyecto, con el objetivo de ser capaz de analizar y gestionar conflictos, así como errores de ejecución. Además de realizar mediciones, simulaciones constructivas, presentaciones y animaciones. Duración del curso: 20 horas.</p>
                                    <h4>Resumen</h4>
                                    <ul>
                                        <li>4.1: Interfaz de Usuario.</li>
                                        <li>4.2: Generalidades.</li>
                                        <li>4.3: Exportación e Importación de Archivos de Revit.</li>
                                        <li>4.4: Navegación.</li>
                                        <li>4.5: Puntos de Vistas.</li>
                                        <li>4.6: Secciones.</li>
                                        <li>4.7: Navegación Realista.</li>
                                        <li>4.8: Anotaciones, Comentarios e Identificadores.</li>
                                        <li>4.9: Árbol De Selección y Conjuntos.</li>
                                        <li>4.10: Clash Detection vs Detección de Interferencias De Revit.</li>
                                        <li>4.11: Exportación de Informes.</li>
                                        <li>4.12: Practica Calificada IX.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseE" aria-expanded="true" aria-controls="collapseE">
                                        <span>05</span>	MÓDULO 5: Planificación BIM 4D
                                    </button>
                                    <div class="leanth-course">
                                        <span>10 Horas</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseE" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <img src="{{asset('img/course/curso-e.jpg')}}" alt="" class="float-right p-3">
                                    <p>En este curso se gestiona el proyecto transformando el modelo BIM 3D creado en Revit en un modelo BIM 4D y 5D, para controlar la ejecución del proyecto. El curso introduce los conceptos de la planificación BIM 4D. Con este curso se aumentará la productividad y aprenderás a planificar y coordinar el proyecto entero desde el diseño hasta la terminación de la obra. Duración: 10 horas</p>
                                    <h4>Resumen</h4>
                                    <ul>
                                        <li>5.1: Introducción al 4D Navisworks.</li>
                                        <li>5.2: Timeliner.</li>
                                        <li>5.3: Importación desde Ms Proyect.</li>
                                        <li>5.4:  Simulación con Timeliner.</li>
                                        <li>5.5:  Animaciones y Exportación.</li>
                                        <li>5.6: Practica Calificada X.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseG" aria-expanded="true" aria-controls="collapseG">
                                        <span>06</span>	MÓDULO 6: Gestión y Presuspuesto BIM 5D
                                    </button>
                                    <div class="leanth-course">
                                        <span>10 Horas</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseG" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <img src="{{asset('img/course/curso-e.jpg')}}" alt="" class="float-right p-3">
                                    <p>En este curso aprenderemos cómo sacar presupuestos y mediciones utilizando nuestro modelo BIM creado en REVIT para el control de presupuestos, mediciones y gestión de obra, realizando un seguimiento real. Este curso profundiza en conceptos teóricos de la especialidad de gestión y planificación. Duración: 10 horas</p>
                                    <h4>Resumen</h4>
                                    <ul>
                                        <li>6.1: Quantification en Navisworks.</li>
                                        <li>6.2: Relación Modelado Directo e Indirecto En Revit.</li>
                                        <li>6.3: Tablas de Planificación, Avanzadas.</li>
                                        <li>6.4: Tablas de Materiales, Avanzadas.</li>
                                        <li>6.5: Uso de Addins Para Presupuestos.</li>
                                        <li>6.6: Uso de Recursos - Consumo En Horas.</li>
                                        <li>6.7: Exportación de Datos a Excel.</li>
                                        <li>6.8: Practica Calificada XI.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /market guide -->
        </div>
    </section>
    <!-- /course-categori -->


    <section id="why-choose-us" class="why-choose-us-section">
        <div class="jarallax  backgroud-style">
            <div class="container">
                <div class="section-title mb20 headline text-center "  >
                    <span class="subtitle text-uppercase d-none d-sm-inline">160 horas cronológicas (4 meses)</span>
                    <span class="subtitle text-uppercase d-sm-none">160 horas <br> cronológicas <br> (4 meses)</span>
                    <h2><span>DURACION DEL PROGRAMA.</span></h2>
                </div>

                <div  class="testimonial-slide">
                    <div class="section-title-2 mb65 headline text-left "  >
                        <div class="row">
                            <div class="col">
                                <h2><span>MODALIDAD.</span></h2>
                                <div class="row mt-5">
                                    <div class="col">
                                        <table class="table table-dark">
                                            <tr>
                                                <td>Aulas</td>
                                                <td>Virtuales en vivo y con acceso a grabaciones</td>
                                            </tr>
                                            <tr>
                                                <td>Prácticas</td>
                                                <td>Virtuales</td>
                                            </tr>
                                            <tr>
                                                <td>Exámenes ACP</td>
                                                <td>Presenciales</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h2><span>CRONOGRAMA.</span></h2>
                                <div class="row mt-5">
                                    <div class="col">
                                        <table class="table table-dark">
                                            <tr>
                                                <td>Matrículas</td>
                                                <td>hasta el 27 de abril de 2021</td>
                                            </tr>
                                            <tr>
                                                <td>Inicio</td>
                                                <td>27 de abril de 2021</td>
                                            </tr>
                                            <tr>
                                                <td>Finalización</td>
                                                <td>27 de agosto de 2021</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2><span>HORARIOS.</span></h2>
                        <div class="row mt-5">
                            <div class="col-12 col-sm-6">
                                <table class="table table-dark">
                                    <tr>
                                        <td>MARTES Y JUEVES</td>
                                        <td>7:00 PM a 10:00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>SABADOS</td>
                                        <td>3:00 PM a 7:00 PM</td>
                                    </tr>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of why choose us section
        ============================================= -->

    <section id="best-course" class="best-course-section pb-0">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span> INVERSION</span></h2>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card text-white bg-dark mb-3 w-100 text-center">
                        <div class="card-header">COSTO REGULAR</div>
                        <div class="card-body">
                            <h5 class="card-title text-warning">US$ 459</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success mb-3 w-100 text-center">
                        <div class="card-header">COSTO ESTUDIANTES</div>
                        <div class="card-body">
                            <h5 class="card-title text-warning">US$ 389</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title-2 mt-5 mb65 headline text-left "  >
                <div class="row">
                    <div class="col">
                        <h2><span>COSTO DE LAS CERTIFICACIONES (ADICIONALES).</span></h2>
                        <p class="mt-5">Arma tu propio paquete con las certificaciones que más se adecúen a tus intereses:</p>
                        <div class="row justify-content-center mt-5">
                            <div class="col-12 col-sm-6">
                                <div class="card text-white bg-dark mb-3 w-100 text-center">
                                    <div class="card-header">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-8 col-sm-6">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <img src="{{asset('img/logo/logo-starking.png')}}" alt="" class="w-100">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('img/logo/logo-colegio.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                            3 CERTIFICADOS DE STARKING7 DEL COLEGIO DE INGENIEROS DEL PERU
                                            CONSEJO DEPARTAMENTAL CUSCO
                                            (VALIDOS A NIVEL NACIONAL - PERU)
                                    </div>
                                    <div class="card-footer font-weight-bold h4 text-warning">
                                        US$ 40
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card text-white bg-info mb-3 w-100 text-center">
                                    <div class="card-header">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-8 col-sm-6">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <img src="{{asset('img/sponsor/autodesk-user.png')}}" alt="" class="w-100">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('img/sponsor/r2.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        “AUTODESK CERTIFIED USER” – ACU *,
                                        REVIT ARCHITECTURE + INSIGNIA DIGITAL
                                        (CERTIFICACION VALIDA A NIVEL MUNDIAL)
                                        (33% DE DESCUENTO POR LLEVAR EL PROGRAMA - PRECIO REGULAR <del>US$ 75</del>)
                                    </div>
                                    <div class="card-footer font-weight-bold h4 text-warning">
                                        US$ 50
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card text-white bg-dark mb-3 w-100 text-center">
                                    <div class="card-header">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-8 col-sm-6">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <img src="{{asset('img/sponsor/autodesk-profesional.png')}}" alt="" class="w-100">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('img/sponsor/r1.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        “AUTODESK CERTIFIED PROFESSIONAL” – ACP *,
                                        REVIT ARCHITECTURE + INSIGNIA DIGITAL
                                        (CERTIFICACIÓN DE MAYOR PRESTIGIO EN MODELADO BIM A NIVEL MUNDIAL)
                                        (33% DE DESCUENTO POR LLEVAR EL PROGRAMA - PRECIO REGULAR <del>US$ 150</del>)

                                    </div>
                                    <div class="card-footer font-weight-bold h4 text-warning">
                                        US$ 100
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="font-italic">*Sujeto a evaluación de Autodesk en nuestros centros de pruebas oficiales de Certiport ubicados en distintas ciudades del Perú (consultar ciudades disponibles).</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="faq-section ">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
                <h2><span>MODALIDADES DE PAGO</span></h2>
                <p class="mt-5">Puedes elegir distintas opciones y modalidades de pago tal como detallan los siguientes cuadros:</p>
            </div>
            <div class="row bg-white">
                <div class="col-12">
                    <img src="{{asset('img/banner/modalidad1.png')}}" alt="" class="w-100 mb-4">
                </div>
                <div class="col-12">
                    <img src="{{asset('img/banner/modalidad2.png')}}" alt="" class="w-100 mb-4">
                    <p class="small">* COSTO REGULAR: APLICA A PROFESIONALES, BACHILLERES Y TECNICOS</p>
                    <p class="small">** COSTO ESTUDIANTE: APLICA A ESTUDIANTES UNIVERSITARIOS Y DE INSTITUTOS</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="text-danger">Importante:</h4>
                    <p>Los exámenes para el “Autodesk Certified Professional ACP” y “Autodesk Certified User ACU” se realizan de manera presencial en nuestros Centros Autorizados de Pruebas Certiport ubicados en distintas ciudades del Perú (Consultar ciudades disponibles).</p>
                </div>
            </div>
        </div>
    </section>

    <section id="best-course" class="best-course-section pb-0">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">MODALIDADES GRUPALES</span>
                <h2><span>TE OFRECEMOS TAMBIEN UN 20% DE DESCUENTO EN LAS SIGUIENTES
                     MODALIDADES GRUPALES</span></h2>
            </div>

            <div class="row">
                <div class="col">
                    <img src="{{asset('img/banner/modalidada.png')}}" alt="" class="w-100 mb-4">
                    <img src="{{asset('img/banner/modalidadb.png')}}" alt="" class="w-100 mb-4">
                    <p>* Los montos señalados en los cuadros son individuales. En cualquiera de los casos completar la primera cuota grupal para asegurar las 3 vacantes.</p>
                </div>
            </div>

            <div class="section-title-2 mt-5 mb65 headline text-left "  >
                <div class="row">
                    <div class="col">
                        <h2><span>¡Y SI DESEAS OBTENER TODAS LAS CERTIFICACIONES OBTEN ESTA SUPER PROMOCION!</span></h2>
                        <p class="mt-5">PAQUETE COMPLETO DE CERTIFICACIONES BIM</p>
                        <div class="row justify-content-center mt-5">
                            <div class="col-12 col-sm-6">
                                <div class="card text-white bg-dark mb-3 w-100 text-center">
                                    <div class="card-header font-weight-bold h4 text-warning">SUPER PAQUETE - REGULAR</div>
                                    <div class="card-body">
                                        <div class="about-list mb65 ul-li-block text-white mb-0">
                                            <ul class="text-left">
                                                <li class="text-white">PROGRAMA BIM</li>
                                                <li class="text-white">CERTIFICADO DEL COLEGIO DE DINGENIEROS DEL PERU</li>
                                                <li class="text-white">CERTIFICADO “AUTODESK CERTIFIED USER” ACU</li>
                                                <li class="text-white">CERTIFICADO “AUTODESK CERTIFIED PROFESIONAL” ACP</li>
                                            </ul>
                                        </div>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-4">
                                                        <img src="{{asset('img/logo/logo-starking.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/autodesk-user.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/r2.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/autodesk-profesional.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/r1.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/logo/logo-colegio.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer font-weight-bold">
                                        <p class="m-0"><del>US$ 649</del></p>
                                        <p class="m-0 text-warning h4">US$ 619 (EN UN SOLO PAGO)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card text-white bg-dark mb-3 w-100 text-center">
                                    <div class="card-header font-weight-bold h4 text-success">SUPER PAQUETE - ESTUDIANTES</div>
                                    <div class="card-body">
                                        <div class="about-list mb65 ul-li-block text-white mb-0">
                                            <ul class="text-left">
                                                <li class="text-white">PROGRAMA BIM</li>
                                                <li class="text-white">CERTIFICADO DEL COLEGIO DE DINGENIEROS DEL PERU</li>
                                                <li class="text-white">CERTIFICADO “AUTODESK CERTIFIED USER” ACU</li>
                                                <li class="text-white">CERTIFICADO “AUTODESK CERTIFIED PROFESIONAL” ACP</li>
                                            </ul>
                                        </div>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-4">
                                                        <img src="{{asset('img/logo/logo-starking.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/autodesk-user.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/r2.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/autodesk-profesional.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/sponsor/r1.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="{{asset('img/logo/logo-colegio.png')}}" alt="" class="w-100 p-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer font-weight-bold">
                                        <p class="m-0"><del>US$ 649</del></p>
                                        <p class="m-0 text-warning h4">US$ 549 (EN UN SOLO PAGO)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="faq-section faq-secound-home-version backgroud-style">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
                <h2><span class="text-warning">¡INSCRIBETE YA!</span></h2>
                <h2><span>FORMAS DE PAGO</span></h2>
            </div>

            <div class="section-title-2 mb65 headline text-left "  >
                <div class="row">
                    <div class="col">
                        <h2 class="text-white"><span>Depósitos.</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/bcp.png')}}" alt="">
                                <table class="table table-dark">
                                    <tr>
                                        <td>CUENTA EN DOLARES BCP:</td>
                                        <td>285-2632748-1-09</td>
                                    </tr>
                                    <tr>
                                        <td>CCI:</td>
                                        <td>00228500263274810954</td>
                                    </tr>
                                </table>
                                <p class="text-white">STARKING7 SAC</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="text-white"><span>Depósitos.</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/interbank.png')}}" alt="">
                                <table class="table table-dark">
                                    <tr>
                                        <td>CUENTA EN SOLES INTERBANK: (CAMBIO PARALELO):</td>
                                        <td>420-3001785620</td>
                                    </tr>
                                    <tr>
                                        <td>CCI:</td>
                                        <td>003-420-003001785620-71</td>
                                    </tr>
                                </table>
                                <p class="text-white">SG7 CONSTRUCCION Y BIENES RAICES
                                    STARKING7 SAC</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col">
                        <h2 class="text-white"><span>PAYPAL.</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/paypal.png')}}" alt="">
                                <a href="https://www.paypal.com/paypalme/starking7" class="font-weight-bold text-warning"> https://www.paypal.com/paypalme/starking7</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="text-white"><span>EN EFECTIVO O TARJETA:</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/mastervisa.png')}}" alt="" class="float-right">
                                <p class="text-white"><b>Oficinas:</b></p>
                                <ul>
                                    <li class="text-white">Av. Micaela Bastidas 258 Of. 606 Edificio El Roble Wanchaq, Cusco, Perú</li>
                                    <li class="text-white">230 S Broad St. 17th floor, Of. 19, Philadelphia, PA, 19102, Estados Unidos</li>
                                </ul>
                                <p class="text-white">Tarjetas de crédito Visa o MasterCard</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <h4 class="text-white">RESERVA DE MATRICULA</h4>
                    <p class="text-light">Reserva tu matrícula con estos sencillos pasos. ¡VACANTES LIMITADAS!</p>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="card bg-primary">
                                <div class="card-body text-white font-weight-bold text-center">
                                    1. REALIZA EL DEPOSITO O TRANSFERENCIA
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card bg-info">
                                <div class="card-body text-white font-weight-bold text-center">
                                    2. ENVIANOS LA FOTO DEL VOUCHER O CAPTURA
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card bg-success">
                                <div class="card-body text-center text-white font-weight-bold">
                                    3. COMPLETA EL FORMULARIO DE MATRICULA
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-danger mt-5">Nota:</h5>
                    <p class="text-white">Envía de voucher al WhatsApp: <a href="https://api.whatsapp.com/send?phone=51932295953" target="_blank" class="btn btn-link">932295953</a> o al correo gerencia@starking7.com, una vez recibido y corroborado el voucher, te enviaremos el formulario para completar tu matrícula.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="about-us-section home-secound home-third bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="about-resigter-form backgroud-style relative-position">
                        <div class="register-content">
                            <div class="register-fomr-title text-center">
                                <h3 class="bold-font"><span>Registro</span> Gratuito.</h3>
                                <p>Pre inscripciones para el curso BIM</p>
                            </div>
                            <example-component></example-component>
                        </div>
                    </div>
                    <div class="bg-mockup">
                        <img src="assets/img/about/abt.jpg" alt="">
                    </div>
                </div>
                <!-- /form -->

                <div class="col-md-7 d-none">
                    <div class="about-us-text">
                        <div class="section-title relative-position mb20 headline text-left">
                            <span class="subtitle ml42 text-uppercase">PROGRAMA INTERNACIONAL</span>
                            <h2>BIM <br><span>EN EDIFICACIONES</span></h2>
                        </div>
                        <div class="about-content-text">
                            <img src="{{asset('img/banner/fondo-bim-p.jpg')}}" alt="" class="w-100 d-sm-none mb-3">
                            <p>En Starking7 lograrás la mejor preparación para los desafíos en la construcción mediante una formación en BIM del mas alto nivel, ya que contamos con un equipo de BIM Managers e instructores internacionales certificados de Autodesk impartiendo una enseñanza de primer nivel en BIM, lo cual garantiza un nivel de aprendizaje de las más altas esferas.</p>
                            <p>Alcanzarás el “Autodesk Certified Professional ACP” y “Autodesk Certified User ACU”: las certificaciones de mayor prestigio a nivel mundial que acreditan el dominio de Software para la aplicación de la Metodología BIM.</p>
                            {{--                            <div class="about-list mb65 ul-li-block">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li>Professional And Experienced Since 1980</li>--}}
                            {{--                                    <li>We Connect Learners To The Best  Universities From Around The World</li>--}}
                            {{--                                    <li>Our Mission Increasing Global Access To Quality Aducation</li>--}}
                            {{--                                    <li>100K Online Available Courses</li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="about-btn">--}}
                            {{--                                <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">--}}
                            {{--                                    <a href="#">About Us <i class="fas fa-caret-right"></i></a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">--}}
                            {{--                                    <a href="#">contact us <i class="fas fa-caret-right"></i></a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('img/sponsor/certiport.png')}}" alt="" class="w-100 px-4">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/sponsor/autodesk.png')}}" alt="" class="w-100 px-4">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/sponsor/colegio.png')}}" alt="" class="w-100 px-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-course-section bg-white">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">NUESTRAS CREDENCIALES</span>
                <h2>STARKING7 - <span> CERTIPORT</span></h2>
                <p>El Programa está estructurado para alcanzar desde el nivel básico de Modelador BIM hasta el nivel avanzado de Gestión y Presupuestos BIM en Edificaciones, tal como se muestra a continuación:
                </p>
            </div>
            <div class="row">
                <div class="col text-center">
                    <img src="{{asset('img/certificado-starking.png')}}" alt="" class="w-100">
                    <p class="mt-4 font-weight-bold">Certificado de Centro Autorizado de Pruebas Certiport - Starking7 SAC
                        (Certiport Authorized Testing Center - CATC)</p>
                </div>
            </div>
            <div class="section-title mb45 headline text-center mt60">
                <h2>INSTRUCTOR PRINCIPAL: <span> BIM MANAGER - ARGENTINA</span></h2>
                <img src="{{asset('img/docente-file.png')}}" alt="" class="w-100">
            </div>
        </div>
    </section>


    <section id="why-choose" class="why-choose-section version-four backgroud-style">
        <div class="container">
            <div class="section-title mb65 headline text-center">
                <span class="subtitle text-uppercase mb25">Starking7</span>
                <h2 class="mt-5"><span>CERTIPORT</span></h2>
            </div>

            <div class="row">
                <div class="col">
                    <p class="font-weight-bold text-white">Certiport es el proveedor líder de servicios de desarrollo, entrega y gestión de programas de exámenes de certificación. Los exámenes Certiport se entregan a través de una red expansiva de más de 14,000 Centros de Pruebas Autorizados Certiport en todo el mundo.</p>
                    <p class="font-weight-bold text-white">Certiport trabaja con proveedores de certificación líderes en la industria para llevar sus programas al mercado con éxito. Con una experiencia particular en el mundo académico, para crear un plan de lanzamiento al mercado único que impulsa el rendimiento del programa global. Certiport gestiona una cartera sofisticada de programas de certificación de las más grandes compañías como Microsoft, Autodesk, Apple, Adobe, Unity, Swift, entre otros.</p>
                </div>
            </div>
            <div class="alert alert-light">
                <div class="row justify-content-center">
                    <div class="col col-sm-6">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('img/sponsor/autodesk.png')}}" alt="" class="w-100">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/sponsor/microsoft.png')}}" alt="" class="w-100">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/sponsor/pmi.png')}}" alt="" class="w-100">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/sponsor/adobe.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title mb65 d-block pt-4 headline text-center">
                <h2 class="mt-5 text-warning">REVIT AUTODESK - <span> VERSION OFICIAL 2020</span></h2>
            </div>
            <div class="row">
                <div class="col">
                    <p class="font-weight-bold text-white">Revit Autodesk es el Software más completo para todas las especialidades en Construcción y de última generación para el manejo Integral de la Metodología BIM; permite al usuario diseñar con elementos de modelación y dibujo paramétrico el cual provee una asociatividad completa de orden bidireccional, es decir que un cambio en algún lugar significa un cambio en todos los lugares y especialidades instantáneamente, sin la intervención del usuario para cambiar manualmente todas las vistas, siendo un Software donde interactúan todas las disciplinas de manera simultánea, a diferencia de otros programas CAD.</p>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-6">
                    <img src="{{asset('img/revid.png')}}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose" class="mb65 pt150">
        <div class="container">
            <div class="section-title mb65 headline text-center">
                <span class="subtitle text-uppercase mb25">Starking7</span>
                <h2 class="mt-5"><span>INSIGNIA DIGITAL DE CERTIFICACIÓN DE AUTODESK</span></h2>
            </div>

            <div class="row">
                <div class="col">
                    <p class="font-weight-bold">Las insignias digitales son versiones habilitadas para la web de una credencial, certificación o resultado de aprendizaje. Representar su credencial como una insignia le brinda la capacidad de compartir sus habilidades en línea de una manera simple, confiable y fácilmente verificable en tiempo real.</p>
                    <p class="font-weight-bold">Las certificaciones de Autodesk son algunas de las habilidades más solicitadas en las ofertas de trabajo en línea. Su credencial digital le facilita la validación de habilidades con empleadores potenciales en sitios de redes sociales como LinkedIn, Facebook y Twitter, así como carteras de correo electrónico y en línea.</p>
                    <p class="font-weight-bold">Cuando obtenga una de las certificaciones de Autodesk, se le notificará de la insignia digital correspondiente. Acepte y use sus credenciales digitales para informar a sus posibles empleadores, instituciones académicas, colegas y colegas acerca de sus credenciales.</p>
                </div>
            </div>
            <div class="alert alert-light">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('img/logo/r1-v.png')}}" alt="" class="w-100">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/logo/r2-b.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title mb65 d-block pt-4 headline text-center">
                <h2 class="mt-5 text-warning">¡MUESTRA<span> TU INSIGNIA!</span></h2>
            </div>
            <div class="row">
                <div class="col">
                    <p class="font-weight-bold">Acclaim es la plataforma de identificación digital utilizada por Certiport. Ayuda a los estudiantes a avanzar profesionalmente al establecer rápidamente la credibilidad de las oportunidades en la educación superior y el mercado laboral. Cada credencial contiene datos verificables que le dicen a los empleadores y a los comités de admisión lo que hizo, quién dice que lo hizo y por qué es importante.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="best-course" class="best-course-section pb-0">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span>¡LA MEJOR INVERSION QUE PUEDES REALIZAR AHORA ES EN TU CONOCIMIENTO!</span></h2>
            </div>

            <div class="row">
                <div class="col">
                    <p>Como empresa constructora sabemos que la innovación es la clave para supervivencia en el mercado de la construcción y gracias a la Metodología BIM se logra ahorrar tiempo valioso y evitar grandes desperdicios, lo cual significa un gran beneficio que puede ser determinante en el transcurso del tiempo.</p>
                    <p>Este avance de la tecnología en el sector construcción conlleva a la implementación de una serie de normativas que promueven el uso del BIM, el cual en muy corto plazo será obligatorio tanto en el sector público como en el privado, a través de lineamientos y decretos legislativos como el PLAN BIM PERU con Decreto Supremo N° 289 – 2019 EF. que aceleran cada vez más este proceso de cambio. Por lo tanto, los profesionales que no dominen el BIM quedarán relegados en el campo de la construcción que es cada vez mas competitivo; es por ello que la mejor inversión que puedes realizar ahora es en tu conocimiento, ya que de esto dependerá tu futuro y desarrollo profesional.</p>
                </div>
            </div>

            <div class="section-title-2 mt-5 mb65 headline text-left "  >
                <div class="row">
                    <div class="col">
                        <h2><span>¡¡APRENDE LA METODOLOGIA BIM CON LOS MEJORES Y LOGRA LAS CERTIFICIONES DE MAYOR PRESTIGIO A NIVEL MUNDIAL!</span></h2>
                        <img src="{{asset('img/banner/congratulation.jpg')}}" alt="" class="w-100 mt-5">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="card bg-dark">
                            <div class="card-body">
                                <h4 class="text-white mb-4">𝗖𝗢𝗡𝗧𝗔𝗖𝗧𝗢𝗦 𝗘 𝗜𝗡𝗙𝗢𝗥𝗠𝗘𝗦</h4>
                                <p class="text-warning">✔ Oficinas:</p>
                                <ul>
                                    <li class="text-warning">Av. Micaela Bastidas 258 Of. 606 Edificio El Roble Wanchaq, Cusco, Perú 230 S Broad St. 17th floor, Of. 19, Philadelphia, PA, 19102, Estados Unidos</li>
                                    <li class="text-warning">Teléfonos: <a href="https://api.whatsapp.com/send?phone=51932295953" target="_blank" class="btn btn-link font-weight-bold">932295953</a></li>
                                    <li class="text-warning">Correo electrónico: gerencia@starking7.com</li>
                                    <li class="text-warning">Página web: www.starking7.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


@endsection
