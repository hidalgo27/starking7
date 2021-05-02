@extends('layouts.default')
@section('preloader')
    <div id="preloader"></div>
@endsection
@section('content')
    <!-- Start of about us section
		============================================= -->
    <section id="slide" class="slider-section">
        <div id="slider-item-landing" class="slider-item-details">
            <div class="slider-area slider-bg-pmi relative-position">
                <div class="slider-text">
                    <div class="section-title mb20 headline text-center ">
                        <div class="layer-1-3">
                            <div class="section-title mb-3 headline text-center">
                                <span class="subtitle text-white text-uppercase">PROGRAMA INTERNACIONAL</span>
                            </div>
                            <h1 class="d-none d-md-block third-slide display-3 font-weight-bold text-purple mb-sm-3 rgba-white-6 p-3 rounded shadow"><span>LEAN AGILE PROJECT MANAGEMENT</span></h1>
                            <h1 class="d-md-none third-slide font-weight-bold text-purple mb-sm-3 rgba-white-6 p-3 rounded shadow"><span>LEAN AGILE PROJECT MANAGEMENT</span></h1>
{{--                            <h4 class="mb-3 font-weight-bold text-white">EN EDIFICACIONES</h4>--}}
{{--                            <p class="text-white d-none d-sm-block">En Starking7 lograrás la mejor preparación para los desafíos en la construcción mediante una formación en BIM del mas alto nivel, ya que contamos con un equipo de BIM Managers e instructores internacionales certificados de Autodesk impartiendo una enseñanza de primer nivel en BIM, lo cual garantiza un nivel de aprendizaje de las más altas esferas.</p>--}}
{{--                            <p class="text-white d-none d-sm-block">Alcanzarás el “Autodesk Certified Professional ACP” y “Autodesk Certified User ACU”: las certificaciones de mayor prestigio a nivel mundial que acreditan el dominio de Software para la aplicación de la Metodología BIM.</p>--}}
                        </div>
                    </div>
                    <div class="layer-1-2 mb-4 text-center">
                        <div class="coming-countdown ul-li">
                            <p class="text-warning mt-3 font-weight-bold">INICO DE CLASES 27 DE ABRIL. SEPARA TU VACANTE.</p>
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
                        <a href="#inscripciones" class="btn btn-warning text-white font-weight-bold">Inscripciones aquí</a>
                    </div>


                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{asset('img/sponsor/certiport.png')}}" alt="" class="w-100">
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('img/sponsor/pmr.png')}}" alt="" class="w-100">
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('img/sponsor/pmi-w.png')}}" alt="" class="w-100">
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('img/sponsor/nova.png')}}" alt="" class="w-100">
                                    </div>
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
{{--    <section class="d-sm-none ">--}}
{{--        <div class="container mt-4">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <p class="">En Starking7 lograrás la mejor preparación para los desafíos en la construcción mediante una formación en BIM del mas alto nivel, ya que contamos con un equipo de BIM Managers e instructores internacionales certificados de Autodesk impartiendo una enseñanza de primer nivel en BIM, lo cual garantiza un nivel de aprendizaje de las más altas esferas.</p>--}}
{{--                    <img src="{{asset('img/banner/fondo-bim-p.jpg')}}" alt="" class="d-block w-100 mb-2">--}}
{{--                    <p class="">Alcanzarás el “Autodesk Certified Professional ACP” y “Autodesk Certified User ACU”: las certificaciones de mayor prestigio a nivel mundial que acreditan el dominio de Software para la aplicación de la Metodología BIM.</p>--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section id="faq" class="faq-section faq-secound-home-version backgroud-style">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
                <h2><span>Lean-Ágile Project Management - PMI®</span></h2>
                <p class="font-weight-bold text-white">En el actual entorno disruptivo en el que se desarrolla la dinámica empresarial, para liderar los proyectos hay que tener no solo la convicción, sino también la preparación para llevarlos a cabo. El Futuro está basado en proyectos, por lo tanto los proyectos son el futuro del empleo. </p>

                <p class="font-weight-bold text-white">Nuestras carreras profesionales se han convertido en una secuencia de proyectos. A pesar de todo, actualmente hay un elevado porcentaje de proyectos que fracasan. Los motivos son dispares: falta de adaptación a los entornos actuales, desconocimiento de nuevas herramientas y metodologías y por qué no decirlo, falta de criterio para seleccionar y dirigir proyectos estratégicos. Por ello los directores de proyectos tenemos la oportunidad y la responsabilidad de cambiar esa tendencia. </p>
                <p class="font-weight-bold text-white">Ahora en la gestión de proyectos prima la diversificación sobre la especialización. Por ello este curso se centra no solo en cuestiones técnicas sino también en las habilidades de liderazgo que se necesitan para dirigir equipos altamente competitivos. </p>
                <p class="font-weight-bold text-white">La adaptabilidad de la organización es la creatividad e innovación enfocada a principios y entrega de valor, para lo que es imprescindible la correcta gestión de equipos, procesos y entorno. </p>

                <p class="font-weight-bold text-white">Pasamos de un mundo dirigido por la eficiencia a uno dirigido por el cambio. Hay que animar a los profesionales a prepararse para conocer afondo y manejar eficientemente los conceptos clave en la dirección de proyectos. Necesitarán saber qué herramientas utilizar, desarrollar las competencias necesarias y gestionar adecuadamente las relaciones con los responsables de alto nivel de las organizaciones, para hacerles partícipes del proyecto. </p>
               <p class="font-weight-bold text-white"> Ya no es cuestión de gestionar, sino de liderar proyectos para llevarlos al éxito. </p>
                <span class="font-weight-bold h1 text-white">¿Aceptas el reto?</span>
            </div>

            <div class="faq-tab mb45">
                <div id="accordion" class="panel-group">
                    <div class="panel">
                        <div class="panel-title" id="headingOne">
                            <h3 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-user-plus"></i> Beneficios Exclusivos del Programa
                                </button>
                            </h3>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body p-0">
                                <ul>
                                    <li>
                                        Membresía anual del Project Management Institute - PMI®, por lo que podrás disfrutar de los siguientes beneficios como asociado del PMI®:
                                        <ul>
                                            <li>Acceso al contenido oficial y a las plataformas PMI®, herramientas,  bibliotecas descargables y en agosto podrás disponer de la nueva guía PMBOK Versión 7</li>
                                            <li>PMBOK Versión 6. Orientado a Procesos: ¿Cómo hago algo?  49 Procesos en 10 Áreas</li>
                                            <li>PMBOK Versión 7. Orientado a Principios, más flexible : ¿Por qué hago algo? 12 Principios en 8 Dominios.</li>
                                            <li>Motivos del cambio: adaptarse a tiempos actuales para seguir siendo la norma de referencia de PM</li>
                                            <li>No solo para ciclo de vida predictivo sino también ciclo de vida hibrido o iterativo (incremental/ágil).</li>
                                            <li>Acceso a descuentos para los exámenes PMP®, CAPM, ACP del PMI®.</li>
                                        </ul>
                                    </li>
                                    <li>Preparación y capacitación para exámenes PMP® de la más alta calidad. Instructora y Directora Master Project Management PMI®-ACP, PMP®  (España)</li>
                                    <li>Curso preparatorio de 40 horas aptas para ser reconocidos con 40 PDU (Unidades de Desarrollo Profesional) por el PMI®, según los requisitos para al examen de certificación PMP® del PMI®.</li>
                                    <li>Asesoría para la obtención del PMP®, CAPM®, PM Ready® de acuerdo a tu perfil profesional.</li>
                                    <li>Simulador de exámenes con estándares del PMI con más de 5000 preguntas</li>

                                    <li>
                                        Certificaciones:
                                        <ul>
                                            <li>Certificado de Starking7 con 40 PDU aptas para ser reconocidas por el PMI®, firmado y avalado por la Instructora PMI®-ACP, PMP®</li>
                                            <li>Opcional - Certificado Project Management Ready de validez internacional en nuestro Centro Autorizado de Pruebas Certiport + insignia digital (Nueva certificación de nivel de entrada del PMI®)</li>
                                        </ul>
                                    </li>
                                    <li>Si no quieres certificarte porque con la  mejora del ejercicio profesional te basta, este curso también es para ti porque aumentará tu conocimiento y habilidades para la Gestión y dirección de proyectos.</li>
                                    <li>Transmisiones en vivo con interacción, asesoría y monitoreo constante por nuestros docentes y una Plataforma de almacenamiento a tu disposición en la cual se graban todas las clases, de tal manera que no te perderás de ninguna y podrás repasar el material didáctico en cualquier momento y lugar durante la duración del programa.</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingTwo">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-globe"></i> Por que un curso en PM?
                                </button>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body p-0">
                                <img src="{{asset('img/banner/porque-1.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingThree">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-file-alt"></i> Por qué este curso?
                                </button>
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body p-0">
                                <img src="{{asset('img/banner/porque-2.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingFoure">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
                                    <i class="fas fa-chart-bar"></i> Por que con Starking7
                                </button>
                            </h3>
                        </div>
                        <div id="collapseFoure" class="collapse"  data-parent="#accordion">
                            <div class="panel-body p-0">
                                <p>Como dice esta frase de Jonathan Ive, “simplificar es una de las cosas más difíciles de hacer”… nosotros somos especialistas en brindar una formación de primer nivel de una manera directa, innovadora y eficiente, simplificando el método de aprendizaje y garantizando tu éxito como profesional.</p>
                                <p>Partimos además de nuestra formación continua de la Experiencia en ámbito público y privado, diferentes sectores y clientes.</p>
                                <p>Hemos trabajado en analizar las necesidades, los fallos y las tendencias de las organizaciones ahora mismo, hablamos de la situación actual. Por eso está enfocado en necesidades actuales y Centrado en las habilidades que el nuevo director de Proyecto va a necesitar y el que las empresas van a demandar. Algunas de ellas como hemos visto, incluso ni saben aun lo que van a necesitar.</p>
                                <p>Está orientado al Project Economy o economía de proyectos.</p>
                                <p>De igual forma, hemos puesto nuestra experiencia para enfocarnos en una Gestión de herramientas y metodologías desde un enfoque práctico y adaptativo. Porque es lo que vamos a utilizar, lo que estamos hacienda ya en nuestros Proyectos y Organizaciones asociadas.</p>
                                <p>También queremos condensar los años de experiencia de investigación. Nos gusta movernos por distintas iniciativas, distintos campos, estamos implicadas con muchas organizaciones, en algunas de ellas es donde se gestionan los cambios de los que hablamos. Compartiremos por tanto en el curso estos temas de referencia, mediante talleres, o master class o según el formato que mejor se adapte a lo que queremos compartir podrás aprender sobre: técnicas de productividad, gestión del tiempo, liderazgo inclusivo, comunicación efectiva, inteligencia emocional. Visual thinking y mucho más.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingFoure">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class="fas fa-play"></i> Objetivos del Programa
                                </button>
                            </h3>
                        </div>
                        <div id="collapse5" class="collapse"  data-parent="#accordion">
                            <div class="panel-body p-0">
{{--                                <ul>¿Hacia quienes va dirijido el Programa?--}}

{{--                                    <li>Ampliar y diversificar las oportunidades laborales.</li>--}}
{{--                                    <li>Saber escoger, utilizar y desarrollar herramientas y técnicas actuales de la dirección de proyectos (como marco teórico)</li>--}}
{{--                                    <li>Aplicarlas de forma práctica en su entorno laboral (como marco práctico).</li>--}}
{{--                                    <li>Aprender a gestionar los diferentes ciclos de vida de proyectos, según el enfoque de desarrollo requerido y de su adecuación acorde al sector industrial.</li>--}}
{{--                                    <li>Dar a conocer las funciones que desempeña un director de proyectos en los entornos actuales tan cambiantes, y preparar al director de proyectos para ser un líder de proyectos, enfocado al nuevo entorno de trabajo marcado por las tecnologías disruptivas que están apareciendo y por un mundo enfocado a la economía de proyectos (#ProjectEconomy).</li>--}}
{{--                                    <li>Que los profesionales sean capaces de ser parte del cambio en los modelos de negocio, que se involucren y que puedan mejorar la competitividad y productividad de las organizaciones.</li>--}}
{{--                                    <li>Formar a los alumnos en las habilidades de liderazgo, que tanta relevancia tienen en la gestión actual y que será primordial a la hora de gestionar equipos competitivos, integrados, multidisciplinares y remotamente conectados.</li>--}}
{{--                                    <li>Curso Preparatorio para el examen de certificación reconocida internacionalmente como profesional de la dirección de proyecto del Project Management Institute (PMI®-PMP) de 40 DPU.</li>--}}
{{--                                </ul>--}}
                                <img src="{{asset('img/banner/obj.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="about-btn text-center">--}}
{{--                --}}{{--            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">--}}
{{--                --}}{{--                <a href="#">Make Question <i class="fas fa-caret-right"></i></a>--}}
{{--                --}}{{--            </div>--}}
{{--                <p class="text-warning h5 font-weight-normal">Ofrecemos una gama de modalidades y certificaciones de acuerdo a tus posibilidades e intereses…--}}
{{--                    tenemos una gran variedad de opciones para ti.</p>--}}
{{--                <p class="text-warning h5 font-weight-normal">¡Estamos seguros que con todos estos beneficios te esperan grandes oportunidades! <b>¡No te quedes fuera!</b></p>--}}
{{--            </div>--}}
        </div>
    </section>

    <section id="search-course" class="backgroud-style pb-5 mt-5">
        <div class="container">
            <div class="section-title mb20 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span class="text-purple">Talento del PMI</span></h2>
            </div>


            <div class="search-app">
                <div class="row">
                    <div class="col-md-6">
                        <div class="app-mock-up">
                            <img src="{{asset('img/banner/triangulo.png')}}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-us-text search-app-content">
                            <div class="section-title relative-position mb20 headline text-left">
                                <h2><span>El Triángulo del </span> Talento del PMI</h2>
                            </div>

                            <div class="app-details-content">
                                <p>Agrupa las competencias de un director de proyecto en habilidades de gestión técnica, de liderazgo y de estrategia y negocio. Los profesionales tendremos que enfocarnos no sólo en los aspectos técnicos del proyecto (alcance, tiempo y coste), porque no seremos meros ejecutores de enfoques de gestión de proyectos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="why-choose" class="why-choose-section version-four backgroud-style">
        <div class="container">
            <div class="section-title mb65 headline text-center">
                <span class="subtitle text-uppercase mb25">Starking7</span>
                <h2 class="mt-5"><span>¿Hacia quienes va dirijido el Programa?</span></h2>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    <img src="{{asset('img/banner/salidas-p.png')}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-white">Este curso pretende formar a profesionales (con y sin experiencia), para que sean capaces de dirigir y gestionar proyectos de las distintas áreas de mercado y al más alto nivel.
                    <p class="text-white">El project management es una profesión, cuyo modelo de gestión tiene una finalidad, que es, integrar los conocimientos al entorno de cambio. Para ello aplicamos diversas herramientas, modelos de trabajo y métodos que como técnicas estandarizadas, facilitan lograr los objetivos, tanto del cliente como de la organización, de modo que mediante esta dirección integrada de proyecto, nos adaptamos a la dinámica del mercado en la que nos encontremos.</p>
                    <p class="text-white">Actualmente la dinámica de mercado se desarrolla alrededor de la implementación de proyectos cuya organización está adoptando prácticas ágiles. Se basa en una dinámica de permanente de planificación, seguimiento y control, de procesos para la mejora continua y mitigar los riesgos.  Por ello la demanda de profesionales con esta formación y acreditación afecta a TODOS LOS SECTORES PROFESIONALES.</p>
                </div>
            </div>

        </div>
    </section>


    <!-- Start of best course
		============================================= -->
    <section id="best-course" class="best-course-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">ESTRUCTURA DEL PROGRAMA DE ESPECIALIZACION</span>
                <h2><span class="text-purple">CONTENIDO EL PROGRAMA</span></h2>

            </div>
            <div class="affiliate-market-guide mb65">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="{{asset('img/banner/contenido.png')}}" alt="" class="w-100 rounded shadow">
                        <small>De este modo el esquema de contenido del curso aloja el Esquema de Contenido del Examen PMP del PMI al 100%</small>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="font-weight-bold lead">
                            El contenido se estructura en 7 módulos en base al el contenido del estándar del PMI, asociado tradicionalmente a gestión de proyectos de enfoque más predictivo basado en procesos por áreas de conocimiento, pero adaptado al futuro estándar actualizado del PMBOK7v (disponible en agosto 2021) que adopta un formato más ágil, basado en principios según dominios, para incluir la gama completa de enfoques para la entrega de valor.
                        </p>
                    </div>
                </div>
                <div class="section-title-2 mb20 headline text-left mt-5">
                    <h2><span class="text-purple">Contenido del Programa</span></h2>
                </div>

                <div class="affiliate-market-accordion">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-title" id="headingOne">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseA" aria-expanded="true" aria-controls="collapseA">
                                        <span>01</span>	Módulo 1: Introducción, Fundamentos y conceptos básicos de la gestión de proyectos
                                    </button>
                                    <div class="leanth-course">
                                        <span>1,25h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseA" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>1.1. Membresía y Navegación por plataforma PMI</li>
                                        <li>1.2. Identificar conceptos y terminología básica del plan de gestión de proyecto</li>
                                        <li>1.3. Determinar las funciones de los proyectos y responsabilidades</li>
                                        <li>1.4. Identificar herramientas y sistemas utilizados para la dirección de proyecto</li>
                                        <li>1.5. Identificar la solución de problemas comunes. Herramientas y técnicas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingTwo">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseB" aria-expanded="true" aria-controls="collapseB">
                                        <span>02</span>	Módulo 2: Marcos de análisis institucional
                                    </button>
                                    <div class="leanth-course">
                                        <span>1,25h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseB" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>2.1. Identificar los atributos y cualidades de los interesados. Comunicación</li>
                                        <li>2.2. Identificar los atributos (cualidades y propiedades) relacionados con recogida de requisitos.</li>
                                        <li>2.3. Identificar la hoja de ruta del producto</li>
                                        <li>2.4. Identificar los componentes de la entrega de producto</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingThree">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseC" aria-expanded="true" aria-controls="collapseC">
                                        <span>03</span> Módulo 3: Gestión de Proyecto tradicional / Metodologías/ Conocimiento Técnico
                                    </button>
                                    <div class="leanth-course">
                                        <span>1,25h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseC" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>3.1. Planificación en cascada. Gestión de un proyecto tradicional.</li>
                                        <li>3.2. El entorno en el que operan los proyectos, el rol del director del proyecto.</li>
                                        <li>3.3. Gestión de las áreas de conocimiento: Integración, Alcance, Cronograma, Coste, Calidad, Recursos, Comunicación, Riesgo, Adquisiciones e Interesados.</li>
                                        <li>3.4. Código ético.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseD" aria-expanded="true" aria-controls="collapseD">
                                        <span>04</span>	Módulo 4: Gestión de Proyecto Ágile / Metodologías y Marco de trabajo
                                    </button>
                                    <div class="leanth-course">
                                        <span>1,25h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseD" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>4.1. Planificación iterativa /Estrategia, Portafolio, Programa, Proyecto, Producto, Entrega, Iteración y Día.</li>
                                        <li>4.2. Identificar roles ágiles y responsabilidades</li>
                                        <li>4.3. Escalado ágil y principales métodos de agilidad empresarial (Lean, LESS, SAFE, Scrum de scrum, Disciplina Agile, Cristal… )</li>
                                        <li>4.4. Métodos, Herramientas y Técnicas de Equipos (Kanban, Scrum, XP, DSDM, FDD…)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseE" aria-expanded="true" aria-controls="collapseE">
                                        <span>05</span>	Módulo 5:  Personas
                                    </button>
                                    <div class="leanth-course">
                                        <span>14,7h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseE" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>5.1. Gestionar conflictos</li>
                                        <li>5.2. Liderar un equipo</li>
                                        <li>5.3. Apoyar el desempeño del equipo</li>
                                        <li>5.4. Empoderar a los miembros del equipo y a los interesados</li>
                                        <li>5.5. Asegurarse de que los miembros del equipo y los interesados reciban la capacitación decuada</li>
                                        <li>5.6. Crear un equipo</li>
                                        <li>5.7. Abordar y eliminar los impedimentos, obstáculos y bloqueadores para el equipo</li>
                                        <li>5.8. Negociar acuerdos de proyectos.</li>
                                        <li>5.9. Colaborar con interesados</li>
                                        <li>5.10. Generar un entendimiento compartido</li>
                                        <li>5.11. Comprometer y apoyar a los equipos virtuales</li>
                                        <li>5.12. Definir las reglas básicas del equipo</li>
                                        <li>5.13. Orientar a los interesados pertinentes</li>
                                        <li>5.14. Promover el desempeño del equipo a través de la aplicación de inteligencia emocional</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseG" aria-expanded="true" aria-controls="collapseG">
                                        <span>06</span>	Módulo 6:  Proceso
                                    </button>
                                    <div class="leanth-course">
                                        <span>17,5h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseG" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>6.1. Ejecutar un proyecto con la urgencia necesaria para entregar valor de negocio</li>
                                        <li>6.2. Gestionar las comunicaciones</li>
                                        <li>6.3. Evaluar y gestionar los riesgos</li>
                                        <li>6.4. Comprometer a los interesados</li>
                                        <li>6.5. Planificar y gestionar el presupuesto y los recursos</li>
                                        <li>6.6. Planificar y gestionar el cronograma</li>
                                        <li>6.7. Planificar y gestionar la calidad de productos y entregables</li>
                                        <li>6.8. Planificar y gestionar el alcance</li>
                                        <li>6.9. Integrar actividades de planificación del proyecto</li>
                                        <li>6.10. Gestionar cambios del proyecto</li>
                                        <li>6.11. Planificar y gestionar adquisiciones</li>
                                        <li>6.12. Gestionar artefactos del proyecto</li>
                                        <li>6.13. Determinar la metodología/métodos y prácticas adecuadas para el proyecto</li>
                                        <li>6.14. Establecer la estructura de gobernanza del proyecto</li>
                                        <li>6.15. Gestionar problemas del proyecto</li>
                                        <li>6.16. Garantizar la transferencia de conocimientos para la continuidad de proyectos</li>
                                        <li>6.17. Planificar y gestionar el cierre o la transición de proyectos/fases</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title" id="headingFoure">
                                <div class="ac-head">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsef" aria-expanded="true" aria-controls="collapsef">
                                        <span>07</span>	Entorno Empresarial
                                    </button>
                                    <div class="leanth-course">
                                        <span>2,8h</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapsef" class="collapse" data-parent="#accordion">
                                <div class="panel-body p-0">
                                    <ul>
                                        <li>7.1. Planificar y gestionar el cumplimiento de proyectos</li>
                                        <li>7.2. Evaluar y entregar los beneficios y el valor de los proyectos</li>
                                        <li>7.3. Evaluar y abordar cambios en el entorno empresarial extern respecto al impacto en el alcance</li>
                                        <li>7.4. Apoyar el cambio organizacional</li>
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
                    <span class="subtitle text-uppercase d-none d-sm-inline">Starking7</span>
{{--                    <span class="subtitle text-uppercase d-sm-none">160 horas <br> cronológicas <br> (4 meses)</span>--}}
                    <h2><span>EVALUACIONES.</span></h2>
                    <p class="text-white">Se realizarán evaluaciones y prácticas calificadas para comprobar el verdadero aprendizaje de cada modulo del Programa de Especialización, asimismo, para obtener la Certificación Internacional de Project Management Ready, el alumno deberá rendir una Evaluación emitida por Certiport a través de Starking7, demostrando haber obtenido el nivel necesario exigido. De acuerdo al formato oficial de Certiport, se cuenta con 2 oportunidades para aprobar dichas evaluaciones. Los alumnos deberán haber cumplido por lo menos con el 90% con las actividades programadas por el instructor como recomendación para mejorar probabilidades de aprobar el examen oficial.
                    </p>
                </div>

                <div  class="testimonial-slide">
                    <div class="section-title-2 headline text-left "  >
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <h2><span>DURACION DEL PROGRAMA.</span></h2>
                                <div class="row mt-5">
                                    <div class="col">
                                        <table class="table table-dark">
                                            <tr>
                                                <td>Horas</td>
                                                <td>40 horas cronológicas (2 meses)</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
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
                                                <td>Exámenes PM Ready </td>
                                                <td>Presenciales</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <h2><span>CRONOGRAMA.</span></h2>
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <table class="table table-dark">
                                            <tr>
                                                <td>Matrículas</td>
                                                <td>hasta el 15 de mayo de 2021</td>
                                            </tr>
                                            <tr>
                                                <td>Inicio</td>
                                                <td>15 de mayo de 2021</td>
                                            </tr>
                                            <tr>
                                                <td>Finalización</td>
                                                <td>10 de julio de 2021</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <h2><span>HORARIOS.</span></h2>
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <table class="table table-dark">
                                            <tr>
                                                <td>SABADOS</td>
                                                <td>9:00 AM a 1:30 PM</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of why choose us section
        ============================================= -->

    <section id="faq" class="faq-section faq-secound-home-version pb-0 backgroud-style">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span>REQUISITOS PARA CADA CERTIFICACIÓN PMI®</span></h2>

            </div>
            <div class="faq-tab mb45">
                <div id="accordion" class="panel-group mb65">
                    <div class="panel">
                        <div class="panel-title" id="headingOne">
                            <h3 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                                    <img src="{{asset('img/sponsor/pmrc.png')}}" alt="" width="70" class="rounded-circle float-left mr-3"> 1º PMI® Ready, Project Management Ready
                                    (Si eres estudiante y mayor de 20 años)
                                </button>
                            </h3>
                        </div>
                        <div id="collapseUno" class="collapse show" aria-labelledby="headingUno" data-parent="#accordion">
                            <div class="panel-body p-0">
                                <p>
                                    Esta es una certificación de nivel de entrada que no requiere ninguna experiencia laboral previa en la gestión de proyectos y/ o puede no tener las horas educativas mínimas necesarias para tomar el Certificado de Asociado en Gestión de Proyectos (CAPM)
                                    <a href="https://www.pmi.org/certifications/pmi-project-management-ready" class="btn text-primary btn-link" target="_blank">https://www.pmi.org/certifications/pmi-project-management-ready</a>
                                </p>
                                <div class="alert alert-warning">
                                    <ul class="m-0">
                                        <li>Leído en un nivel de séptimo grado. Conceptos básicos fundamentales de la gestión de proyectos</li>
                                        <li>Poseer conocimientos básicos de informática.</li>
                                        <li>Ser capaz de participar en la formación y tomar exámenes</li>
                                    </ul>
                                </div>
                                <a href="https://certiport.pearsonvue.com/Certifications/PMI/Certifications/Overview" class="btn text-primary btn-link" target="_blank">https://certiport.pearsonvue.com/Certifications/PMI/Certifications/Overview</a>

                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingDos">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                                    <img src="{{asset('img/sponsor/capm.png')}}" alt="" width="70" class="rounded-circle float-left mr-3"> 2º CAPM® Certified Associate in Project Management <br> (Si posees título secundario o universitario)
                                </button>
                            </h3>
                        </div>
                        <div id="collapseDos" class="collapse" aria-labelledby="headingDos" data-parent="#accordion">
                            <div class="panel-body p-0">
                                <p>
                                    <a href="https://www.pmi.org/certifications/certified-associate-capm" class="btn text-primary btn-link" target="_blank">https://www.pmi.org/certifications/certified-associate-capm</a>
                                </p>
                                <div class="alert alert-success">
                                    <ul class="m-0">
                                        <li>Título secundario (diploma de secundaria, título de asociado o equivalente global)</li>
                                        <li>23 horas de formación en gestión de proyectos (como la que impartimos mediante este curso) completadas para el momento en que se presenta al examen.</li>
                                    </ul>
                                </div>
                                <a href="https://www.pmi.org/-/media/pmi/documents/public/pdf/certifications/certified-associate-project-management-handbook.pdf" class="btn text-primary btn-link" target="_blank">https://www.pmi.org/-/media/pmi/documents/public/pdf/certifications/certified-associate-project-management-handbook.pdf</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title" id="headingTres">
                            <h3 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                                    <img src="{{asset('img/sponsor/pmp.png')}}" alt="" width="70" class="rounded-circle float-left mr-3"> 3º PMP® Project Manager Professional (Si tienes experiencia en la Gestión de Proyectos)
                                </button>
                            </h3>
                        </div>
                        <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordion">
                            <div class="panel-body p-0">
                                <p>
                                    <a href="https://www.pmi.org/certifications/project-management-pmp" class="btn text-primary btn-link" target="_blank">https://www.pmi.org/certifications/project-management-pmp</a>
                                </p>
                                <div class="alert alert-info">
                                    <ul class="m-0">
                                        <li>Un título de cuatro años (grado, licenciatura o diplomatura)</li>
                                        <li>36 meses liderando proyectos</li>
                                        <li>35 horas de formación/capacitación en gestión de proyectos (como la que impartimos mediante este curso) o certificación CAPM®</li>
                                        <li>Un diploma de escuela secundaria o un título de asociado (o equivalente global)</li>
                                        <li>60 meses liderando proyectos</li>
                                        <li>35 horas de formación/capacitación en gestión de proyectos (como la que impartimos mediante este curso)  o certificación CAPM®</li>
                                    </ul>
                                </div>
                                <a href="https://www.pmi.org/-/media/pmi/documents/public/pdf/certifications/project-management-professional-handbook.pdf" class="btn text-primary btn-link" target="_blank">https://www.pmi.org/-/media/pmi/documents/public/pdf/certifications/project-management-professional-handbook.pdf</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /market guide -->
        </div>
    </section>

    <section id="best-course" class="best-course-section pb-0">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span class="text-purple">INVERSION</span></h2>
            </div>


                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-sm-8">
                        <div class="card text-white bg-dark mb-3 w-100 text-center">
                            <div class="card-header">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-8 col-sm-6">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <img src="{{asset('img/logo/logo-starking-s.png')}}" alt="" class="w-100">
                                            </div>
                                            <div class="col">
                                                <img src="{{asset('img/sponsor/pmi-w.png')}}" alt="" class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="cart-title font-weight-bold h4 text-warning">PROGRAMA + PAQUETE DE MEMBRESIA PMI</h4>
                            <div class="card-body">
                                <div class="about-list mb65 ul-li-block text-white mb-0">
                                    <ul class="text-left">
                                        <li class="text-white">MEMBRESIA OFICIAL POR UN AÑO DEL PROJECT MANAGMENT INSTITUTE – PMI®</li>
                                        <li class="text-white">CERTIFICADO DE STARKING7 CON FIRMA DE INSTRUCTORA PMI®-ACP Y PMP®</li>
                                        <li class="text-white">ACCESO TOTAL A LA PLATAFORMA DEL PMI® : BIBLIOTECAS DESCARGABLES, PMBOK VERSION 6 Y 7 , Y HERRAMIENTAS DE ESTUDIO</li>
                                        <li class="text-white">DESCUENTOS PARA EXAMENES DE CERTIFICACION DEL PMI POR SER ASOCIADO</li>
                                        <li class="text-white">FORMACION DE 40 H APTAS PARA SER RECONOCIDAS CON 40 PDU POR EL PMI®</li>
                                        <li class="text-white">ACCESO A SIMULADOR PARA PREPARACION  DE EXAMENES DEL PMI CON MAS DE 3000 PREGUNTAS</li>
                                        <li class="text-white">FORMACION DE LA MAS ALTA CALIDAD Y ACTUALIZADA PARA EL EXAMEN DE PMP®</li>
                                        <li class="text-white">ASESORIA PARA LA OBTENCION DEL PMP, CAPM Y PM READY DE ACUERDO A TU PERFIL PROFESIONAL</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer font-weight-bold">
                                <p class="m-0 text-warning h4">Costo US$ 499</p>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="mt-5 mb65 headline text-left "  >
                <div class="row">
                    <div class="col text-center">
                        <h2><span>¡Y AHORA TAMBIEN LA NUEVA CERTIFICACION PM READY! ASESORATE CON NOSOTROS PARA OBTENERLA (COSTO ADICIONAL)</span></h2>

                        <div class="row justify-content-center mt-5">
                            <div class="col-12 col-sm-8">
                                <div class="card text-white bg-dark mb-3 w-100 text-center">
                                    <div class="card-header">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-8 col-sm-6">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <img src="{{asset('img/sponsor/pmi-w.png')}}" alt="" class="w-100">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('img/sponsor/pmr.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="cart-title font-weight-bold h4 text-warning">PROGRAMA + PAQUETE DE MEMBRESIA PMI</h4>
                                    <div class="card-body">
                                        <div class="about-list mb65 ul-li-block text-white mb-0">
                                            “PROJECT MANAGEMENT READY®”
                                            + INSIGNIA DIGITAL
                                            (CERTIFICACION OFICIAL DEL PMI VALIDA A NIVEL MUNDIAL)

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p>(33% DE DESCUENTO POR LLEVAR EL PROGRAMA - PRECIO REGULAR <del>US$ 180)</del></p>
                                        <p class="m-0 text-warning h4 font-weight-bold">
                                            Costo: US$ 120
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="font-italic">*El Project Management Ready® esta sujeto a evaluación para el en nuestros centros de pruebas oficiales de Certiport ubicados en distintas ciudades del Perú (consultar ciudades disponibles).</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="faq-section ">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
                <h2><span>MODALIDADES Y FACILIDADES DE PAGO</span></h2>
            </div>
            <div class="row bg-white">
                <div class="col-12 mb-4" class="font-weight-bold lead">
                    <img src="{{asset('img/banner/mod-1.png')}}" alt="" class="w-100 mb-4">
                    <p class="lead font-weight-bold">* Los exámenes para el “Project Management Ready” se realizan de manera presencial en nuestros Centros Autorizados de Pruebas Certiport ubicados en distintas ciudades del Perú (Consultar ciudades disponibles).</p>
                </div>
                <div class="col-12">
                    <img src="{{asset('img/banner/mod-2.png')}}" alt="" class="w-100 mb-4">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="font-weight-bold lead">* Los montos señalados en los cuadros son individuales.</p>
                    <p class="font-weight-bold lead">En cualquiera de los casos completar la primera cuota grupal para asegurar las 3 vacantes</p>
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

    <section id="inscripciones" class="about-us-section home-secound home-third bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="about-resigter-form backgroud-style relative-position">
                        <div class="register-content">
                            <div class="register-fomr-title text-center">
                                <h3 class="bold-font"><span>Registro</span> Gratuito.</h3>
                                <p>Pre inscripciones para el curso PMI</p>
                            </div>
                            <example-component :estado="2"></example-component>
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
            <div class="section-title headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2><span class="text-purple"> NUESTRAS CREDENCIALES</span></h2>
            </div>
            <h3>Certificados de la profesora</h3>
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <img src="{{asset('img/banner/pmi-a.png')}}" alt="" class="w-100">
                    <p class="mt-4 font-weight-bold">Project Management Professional (PMP)</p>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img src="{{asset('img/banner/pmi-b.png')}}" alt="" class="w-100">
                    <p class="mt-4 font-weight-bold">Agile Project Manager (PMI-ACP) </p>
                </div>
            </div>
            <div class="section-title headline mt60">
                <img src="{{asset('img/banner/instructora.png')}}" alt="" class="float-right">
                <h2><span class="text-purple">INSTRUCTORA</span></h2>
                <p class="font-weight-bold">Sonia Ruiz Agile Project Manager PMI-ACP®, PMI-PMP®</p>
                <p class="font-weight-bold">(España)</p>
                <p class="font-weight-bold">Directora en NOVAKEY GESTIÓN HÍBRIDA DE PROYECTOS</p>
                <p class="font-weight-bold">Coach & Trainer. Facilitadora de equipos de alto rendimiento</p>

                <p class="font-weight-bold">Arquitecta técnica, Ingeniera técnica de Obras Públicas  y Graduada en Ingeniería de la Edificación.</p>
                <p class="font-weight-bold">Directora Máster Project Management.   EADE Universidad Málaga</p>
                <p>Más de 20 años de experiencia y formación en el sector de la edificación y de negocio. Dedicada a la gestión ágil de proyectos. Creativa, proactiva, enfocada en el alcance de los objetivos con éxito mediante trabajo en equipo.</p>
                <p>Durante mi desarrollo como Arquitecta Técnica, Graduada en Edificación e Ingeniera Técnica de Obras Públicas llegué a la faceta de Directora de Proyecto, por lo que prosiguiendo con mi continua formación me certifiqué como PMI-PMP® y PMI-ACP®. Considero necesario, para la gestión de proyecto, el enfoque híbrido mediante empleo simultáneo de marcos de trabajo tradicionales con ágiles. La Disciplina ágil es fundamental para coordinar el riesgo de deslizamiento, incertidumbre o complejidad de las variables, por lo que favorece la verdadera entrega de valor mediante la eficacia productiva de los equipos profesionales. Y el enfoque predictivo, es fundamental en construcción dado que los procesos estandarizados para la gestión de actividades definidas o previsibles, son necesarios para la integración y coordinación del flujo de trabajo y múltiples ciclos productivos del sector edificatorio.</p>
                <p>Un proyecto nace cuando es una idea y finaliza cuando se convierte en una realidad, que curiosamente diferirá bastante de lo que fue en su origen. Por ello, es conveniente aplicar Ingeniería de Valor desde fases tempranas para optimizar el valor y la calidad, así como las restricciones: coste, cronograma y alcance.</p>
                <p>Además de recibir formación, también disfruto compartiéndola, por lo que otra de mis facetas es la de Trainer & Coach Ágil, facilitando la capacitación de equipos multifuncionales y autogestionados ( shu-ha-ri ).</p>
                <p>Me apasiona, por lo que me dedico mayormente a: implementación de marcos de trabajo, metodologías y herramientas para escalamiento de equipos y empresarial mediante Scrum, Kanban, Last Planner System, Integrated Project Delivery, Value Stream Mapping, Just in Time, programación PULL, auditoría de procesos e inspección de producto/servicio con herramientas para la calidad y mejora continua mediante Kaizen (Hoshin Kanri, Ishikawa, 5Why, 5s, informe A3,...).</p>
                <p>Siempre en formación continua, tanto por desarrollo de mis conocimientos y habilidades</p>
                <a href="https://www.linkedin.com/in/sonia-ruiz-agile-project-manager-pmi-acp-pmp-97292329/" class="font-weight-bold d-block">https://www.linkedin.com/in/sonia-ruiz-agile-project-manager-pmi-acp-pmp-97292329/</a>
                <a href="https://youtu.be/RrOtzoUA3Mk" class="font-weight-bold d-block">https://youtu.be/RrOtzoUA3Mk</a>

            </div>
        </div>
    </section>


    <section id="why-choose-us" class="why-choose-us-section">
        <div class="jarallax2  backgroud-style">
            <div class="container">
                <div class="section-title mb20 headline text-center "  >
                    <span class="subtitle text-uppercase d-none d-sm-inline">Sobre nosotros</span>
                    {{--                    <span class="subtitle text-uppercase d-sm-none">160 horas <br> cronológicas <br> (4 meses)</span>--}}
                    <h2><span>STARKING7 SAC</span></h2>
                    <p class="font-weight-bold text-center text-white mt-5">
                        Somos una empresa peruana de Gestión de Inversiones con asociados en América Latina para el desarrollo de Tecnología, Educación, Construcción, Bienes Raíces y también un Centro Autorizado de Pruebas Certiport y Certificaciones Internacionales.
                    </p>
                    <p class="font-weight-bold text-center text-white">
                        Nuestra Empresa esta conformada por un equipo especializado y de primer nivel que cuenta con mas de 10 años de experiencia en el sector, con proyectos y obras que destacan por su calidad e innovación.
                    </p>
                    <p class="font-weight-bold text-center text-white">
                        Ahora gracias a nuestro convenio con la Compañía Estadounidense Certiport estamos facultados para especializar, y ser un Centro de Pruebas y Certificaciones Internacionales de las marcas mas grandes a nivel mundial como Autodesk, Microsoft, Apple, Adobe, entre otros, logrando de esta manera impulsar este tipo de actividades a nivel nacional y en Latinoamérica.
                    </p>
                </div>
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
                    <p class="font-weight-bold text-center text-white">
                        Gracias a nuestro convenio firmado con la Compañía Estadounidense Certiport, estamos facultados para brindar a nuestros alumnos el acceso a las Certificaciones Internacionales de mayor prestigio a nivel mundial, debido a que somos un Centro Autorizado de Pruebas  Certiport CATC. Por lo tanto ahora podrás lograr las Certificaciones Internacionales: Project Management Ready, que registra a los profesionales aprobados en la página oficial del PMI y asesoría y formación para las certificaciones CAPM® y PMP®; siendo posible desde cualquier ciudad del Perú ya que contamos con el equipamiento oficial acreditado por Certiport y un equipo de ingeniería y técnicos especializados para poder realizar dichas evaluaciones.
                    </p>
                </div>
            </div>

            <div class="row mt-4 justify-content-center mb65">
                <div class="col-6 text-center">
                    <p class="text-white">Certificado de Centro Autorizado de Pruebas Certiport - Starking7 SAC
                        (Certiport Authorized Testing Center - CATC)
                    </p>
                    <img src="{{asset('img/banner/catc.png')}}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose" class="mb65 pt150">
        <div class="container">
            <div class="section-title mb65 headline text-center">
                <span class="subtitle text-uppercase mb25">Starking7</span>
                <h2 class="mt-5"><span class="text-purple">INSIGNIA DIGITAL DE CERTIFICACIÓN</span></h2>
            </div>

            <div class="row">
                <div class="col">
                    <p class="font-weight-bold">Las insignias digitales son versiones habilitadas para la web de una credencial, certificación o resultado de aprendizaje. Representar su credencial como una insignia le brinda la capacidad de compartir sus habilidades en línea de una manera simple, confiable y fácilmente verificable en tiempo real.</p>
                    <p class="font-weight-bold">Las certificaciones de Autodesk son algunas de las habilidades más solicitadas en las ofertas de trabajo en línea. Su credencial digital le facilita la validación de habilidades con empleadores potenciales en sitios de redes sociales como LinkedIn, Facebook y Twitter, así como carteras de correo electrónico y en línea.</p>

                </div>
            </div>
            <div class="alert alert-light">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('img/sponsor/pmr.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title mb65 d-block headline text-center">
                <h2 class="mt-3 text-purple">¡MUESTRA<span> TU INSIGNIA!</span></h2>
            </div>
            <div class="row">
                <div class="col">
                    <p class="font-weight-bold">Acclaim es la plataforma de identificación digital utilizada por Certiport. Ayuda a los estudiantes a avanzar profesionalmente al establecer rápidamente la credibilidad de las oportunidades en la educación superior y el mercado laboral. Cada credencial contiene datos verificables que le dicen a los empleadores y a los comités de admisión lo que hizo, quién dice que lo hizo y por qué es importante.</p>
                    <img src="{{asset('img/banner/congratulation.jpg')}}" alt="" class="w-100 mt-5">
                </div>
            </div>
        </div>
    </section>




@endsection
