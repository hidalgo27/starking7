@extends('layouts.default')
@section('content')
    <!-- Start of slider section
    ============================================= -->
    <section id="slide" class="slider-section">
        <div id="slider-item" class="slider-item-details">
            {{--        <div  class="slider-area slider-bg-5 relative-position">--}}
            {{--            <div class="slider-text">--}}
            {{--                <div class="section-title mb20 headline text-left ">--}}
            {{--                    <div class="layer-1-1">--}}
            {{--                        <span class="subtitle ml42 text-uppercase">FORMACIÓN INTEGRAL</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="layer-1-3">--}}
            {{--                        <h2><span>BIM</span> Solución <br> para <span>Construccines</span></h2>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="layer-1-4">--}}
            {{--                    <div class="genius-btn  text-center text-uppercase ul-li-block bold-font">--}}
            {{--                        <a href="#">Nuestros Cursos <i class="fas fa-caret-right"></i></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--        </div>--}}
            {{--        <div class="slider-area slider-bg-2 relative-position">--}}
            {{--            <div class="slider-text">--}}
            {{--                <div class="section-title mb20 headline text-center ">--}}
            {{--                    <div class="layer-1-1">--}}
            {{--                        <span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="layer-1-2">--}}
            {{--                        <h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="layer-1-3">--}}
            {{--                    <div class="search-course mb30 relative-position">--}}
            {{--                        <form action="#" method="post">--}}
            {{--                            <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">--}}
            {{--                            <div class="nws-button text-center  gradient-bg text-capitalize">--}}
            {{--                                <button type="submit" value="Submit">Search Course</button>--}}
            {{--                            </div>--}}
            {{--                        </form>--}}
            {{--                    </div>--}}
            {{--                    <div class="layer-1-4">--}}
            {{--                        <div class="slider-course-category ul-li text-center">--}}
            {{--                            <span class="float-left">BY CATEGORY:</span>--}}
            {{--                            <ul>--}}
            {{--                                <li>Graphics Design</li>--}}
            {{--                                <li>Web Design</li>--}}
            {{--                                <li>Mobile Application</li>--}}
            {{--                                <li>Enginering</li>--}}
            {{--                                <li>Science</li>--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            <div class="slider-area slider-bg-5 relative-position">
                <div class="slider-text">
                    <div class="layer-1-2">
                        <div class="coming-countdown ul-li">
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
                            <p class="text-success small mt-3 font-weight-bold">APROVECHA LA PREVENTA CON UN 20% DE DESCUENTO HASTA EL 10 DE ABRIL</p>
                        </div>
                    </div>
                    <div class="section-title mb20 headline text-center ">
                        <div class="layer-1-3">
                            <h2 class="third-slide"> BIM EN <br><span>EDIFICACIONES</span></h2>
                        </div>
                    </div>
                    <div class="layer-1-4">
                        <div class="about-btn text-center">
                            <div class="genius-btn text-center text-uppercase ul-li-block bold-font">
                                <a href="{{route('landingbim')}}">Ver más <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area slider-bg-5 relative-position">
                <div class="slider-text">
                    <div class="section-title mb20 headline text-center ">
                        <span class="subtitle text-uppercase">FORMACIÓN INTEGRAL</span>
                        {{--                    <h2 class=""  ><span>Inventive</span> Solution <br> for <span>Education</span></h2>--}}
                        <h2><span>BIM</span> Solución <br> para <span>Construccines</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of slider section
        ============================================= -->

    <!-- Start of sponsor section
        ============================================= -->
    <div id="sponsor" class="sponsor-section sponsor-2">
        <div class="container">
            <div class="sponsor-item">
                <div class="sponsor-pic text-center">
                    <img src="{{asset('img/sponsor/certiport.png')}}" alt="" class="w-100 px-4">
                </div>
                <div class="sponsor-pic text-center ">
                    <img src="{{asset('img/sponsor/autodesk.png')}}" alt="" class="w-100 px-4">
                </div>
                <div class="sponsor-pic text-center">
                    <img src="{{asset('img/sponsor/microsoft.png')}}" alt="" class="w-100 px-4">
                </div>
                <div class="sponsor-pic text-center">
                    <img src="{{asset('img/sponsor/adobe.png')}}" alt="" class="w-100 px-4">
                </div>
                <div class="sponsor-pic text-center">
                    <img src="{{asset('img/sponsor/pmi.png')}}" alt="" class="w-100 px-4">
                </div>
                <div class="sponsor-pic text-center">
                    <img src="{{asset('img/sponsor/apple.png')}}" alt="" class="w-100 px-4">
                </div>
                <div class="sponsor-pic text-center">
                    <img src="{{asset('img/sponsor/ic3.png')}}" alt="" class="w-100 px-4">
                </div>
            </div>
        </div>
    </div>
    <!-- End of sponsor section
        ============================================= -->

    <!-- Start popular course
        ============================================= -->
    <section id="popular-course" class="popular-course-section">
        <div class="container">
            <div class="section-title mb20 headline text-left">
                <span class="subtitle text-uppercase">BIM</span>
                <h2><span>Formaciòn</span> Integral.</h2>
                <div class="row">
                    <div class="col-8">
                        <p>Capacitate con un equipo integrado con los mejores docentes a nivel mundial logrando un nivel de aprendizaje de las mas altas esferas para convertirte en el profesional mas destacado y cotizado por las empresas e instituciones</p>
                    </div>
                </div>
            </div>
            <div id="course-slide-item" class="course-slide">
                <div class="course-item-pic-text">
                    <div class="course-pic relative-position mb25">
                        <img src="{{asset('img/course/c-a1.jpg')}}" alt="" class="w-100">
                        <div class="course-price text-center gradient-bg">
                            <span>NUEVO</span>
                        </div>
                        <div class="course-details-btn">
                            <a href="#">DETALLE DEL CURSO <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="course-item-text">
                        <div class="course-title mt10 headline pb45 relative-position">
                            <h3><a href="#">BIM para infraestructura</a> <span class="trend-badge text-uppercase bold-font">En Vivo</span></h3>
                        </div>
                    </div>
                </div>

                <div class="course-item-pic-text">
                    <div class="course-pic relative-position mb25">
                        <img src="{{asset('img/course/c-a2.jpg')}}" alt="" class="w-100">
                        <div class="course-price text-center gradient-bg">
                            <span>NUEVO</span>
                        </div>
                        <div class="course-details-btn">
                            <a href="#">DETALLE DEL CURSO <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="course-item-text">
                        <div class="course-title mt10 headline pb45 relative-position">
                            <h3><a href="#">Modelado y gestión BIM en edificaciones</a> <span class="trend-badge text-uppercase bold-font">En Vivo</span></h3>
                        </div>
                    </div>
                </div>
                <div class="course-item-pic-text">
                    <div class="course-pic relative-position mb25">
                        <img src="{{asset('img/course/c-a3.jpg')}}" alt="" class="w-100">
                        <div class="course-price text-center gradient-bg">
                            <span>NUEVO</span>
                        </div>
                        <div class="course-details-btn">
                            <a href="#">DETALLE DEL CURSO <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="course-item-text">
                        <div class="course-title mt10 headline pb45 relative-position">
                            <h3><a href="#">Project management - PMI</a> <span class="trend-badge text-uppercase bold-font">En Vivo</span></h3>
                        </div>
                    </div>
                </div>
                <!-- /item -->

            {{--            <div class="course-item-pic-text">--}}
            {{--                <div class="course-pic relative-position mb25">--}}
            {{--                    <img src="/img/course/c-2.jpg" alt="">--}}
            {{--                    <div class="course-price text-center gradient-bg">--}}
            {{--                        <span>$99.00</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="course-details-btn">--}}
            {{--                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="course-item-text">--}}
            {{--                    <div class="course-meta">--}}
            {{--                        <span class="course-category bold-font"><a href="#">Mobile Apps</a></span>--}}
            {{--                        <span class="course-author bold-font"><a href="#">Fernando Torres</a></span>--}}
            {{--                        <div class="course-rate ul-li">--}}
            {{--                            <ul>--}}
            {{--                                <li><i class="fas fa-star"></i></li>--}}
            {{--                                <li><i class="fas fa-star"></i></li>--}}
            {{--                                <li><i class="fas fa-star"></i></li>--}}
            {{--                                <li><i class="fas fa-star"></i></li>--}}
            {{--                                <li><i class="fas fa-star"></i></li>--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="course-title mt10 headline pb45 relative-position">--}}
            {{--                        <h3><a href="#">Introduction to Mobile Application Development.</a></h3>--}}
            {{--                    </div>--}}
            {{--                    <div class="course-viewer ul-li">--}}
            {{--                        <ul>--}}
            {{--                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>--}}
            {{--                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>--}}
            {{--                            <li><a href="">125k Unrolled</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- /item -->

            </div>
        </div>
    </section>
    <!-- End popular course
        ============================================= -->
    <!-- Start of why choose us section
            ============================================= -->
    <section id="why-choose-us" class="why-choose-us-section">
        <div class="jarallax  backgroud-style">
            <div class="container">
                <div class="section-title mb20 headline text-center "  >
                    <span class="subtitle text-uppercase">VENTAJAS STARKING7</span>
                    <h2>Razones <span>Por que elegir Starkin7.</span></h2>
                </div>
                <div id="service-slide-item" class="service-slide">
                    <div class="service-text-icon "  >
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Únicos en la Región.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Certificación Global.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Experiencia Comprobada.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon "  >
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">El poder de la educación.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon "  >
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Mejor educación en línea.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon "  >
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-list"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Educación para todos los estudiantes.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
                        </div>
                    </div>

                </div>
                <!-- /service-slide -->
                <div  class="testimonial-slide">
                    <div class="section-title-2 mb65 headline text-left "  >
                        <h2>Cursos <span>Asincrónicos.</span></h2>
                    </div>

                    <div id="testimonial-slide-item" class="testimonial-slide-area">
                        <div class="student-qoute"  >
                            <p class="text-light">Estudia en tu tiempo libre permitiendo administrar tu tiempo de la mejor manera, a traves de nuestros cursos grabados semi asistidos, recibiendo la asesoria y resolucion de consultas de manera constante.</p>
                        </div>
                        <div class="student-qoute"  >
                            <img src="{{asset('img/banner/a.jpg')}}" alt="" class="w-100">
                        </div>

                        <div class="student-qoute"  >
                            <img src="{{asset('img/banner/b.jpg')}}" alt="" class="w-100">
                        </div>

                        <div class="student-qoute"  >
                            <img src="{{asset('img/banner/c.jpg')}}" alt="" class="w-100">
                        </div>

                        <div class="student-qoute">
                            <img src="{{asset('img/banner/d.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of why choose us section
        ============================================= -->

    <!-- Start of best course
        ============================================= -->
    <section id="best-course" class="best-course-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">CERTIFICACIÓN</span>
                <h2>Certificación<span> Global.</span></h2>
            </div>
            <div class="best-course-area mb45">
                <div class="row">
                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/banner/c1.png')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Avalado</span>
                                </div>
{{--                                <div class="course-details-btn">--}}
{{--                                    <a href="#">DETALLE DEL CURSO <i class="fas fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="blakish-overlay"></div>--}}
                            </div>
{{--                            <div class="best-course-text">--}}
{{--                                <div class="course-title mb20 headline relative-position">--}}
{{--                                    <h3><a href="#">Project Management Institute.</a></h3>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/banner/c2.png')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Avalado</span>
                                </div>
{{--                                <div class="course-details-btn">--}}
{{--                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="blakish-overlay"></div>--}}
                            </div>
{{--                            <div class="best-course-text">--}}
{{--                                <div class="course-title mb20 headline relative-position">--}}
{{--                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/banner/c3.png')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Avalado</span>
                                </div>
{{--                                <div class="course-details-btn">--}}
{{--                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="blakish-overlay"></div>--}}
                            </div>
{{--                            <div class="best-course-text">--}}
{{--                                <div class="course-title mb20 headline relative-position">--}}
{{--                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('img/banner/c4.png')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Avalado</span>
                                </div>
{{--                                <div class="course-details-btn">--}}
{{--                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="blakish-overlay"></div>--}}
                            </div>
{{--                            <div class="best-course-text">--}}
{{--                                <div class="course-title mb20 headline relative-position">--}}
{{--                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- /course -->

                </div>
            </div>


        </div>
    </section>
    <!-- End of best course
        ============================================= -->

    <!-- Start FAQ section
        ============================================= -->
    <section id="faq" class="faq-section faq-secound-home-version backgroud-style">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
                <h2>Preguntas<span> Frecuentes</span></h2>
            </div>

            <div class="faq-tab mb45">
                <div class="faq-tab-ques  ul-li">
                    <div class="tab-button text-center mb45">
                        <ul class="product-tab">
                            <li class="active" rel="tab1">GENERAL </li>
                            <li rel="tab4">  EVENTOS  </li>
                        </ul>
                    </div>
                    <!-- /tab-head -->

                    <!-- tab content -->
                    <div class="tab-container">

                        <!-- 1st tab -->
                        <div id="tab1" class="tab-content-1 pt35">
                            <div id="accordion" class="panel-group">
                                <div class="panel">
                                    <div class="panel-title" id="headingOne">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How to Register or Make An Account in Genius?
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title" id="headingTwo">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                What is Genius Courses?
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title" id="headingThree">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What Lorem Ipsum Dolor Sit Amet Consectuerer?
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title" id="headingFoure">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
                                                Adipiscing Diamet Nonnumy Nibh Euismod?
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseFoure" class="collapse"  data-parent="#accordion">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of #accordion -->

                        </div>
                        <!-- #tab1 -->

                        <div id="tab4" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab3 -->

                        <div id="tab5" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab3 -->
                    </div>
                </div>
            </div>

            <div class="about-btn text-center">
                {{--            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">--}}
                {{--                <a href="#">Make Question <i class="fas fa-caret-right"></i></a>--}}
                {{--            </div>--}}
                <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                    <a href="#">Contacto <i class="fas fa-caret-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ section
        ============================================= -->

    <!-- Start secound teacher section
        ============================================= -->
    <section id="teacher-2" class="secound-teacher-section">
        <div class="container">
            <div class="section-title mb35 headline text-left">
                <span class="subtitle ml42  text-uppercase">FAMILIA STARKING7</span>
                <h2>Starking7 <span>Docentes.</span></h2>
            </div>
            <div class="teacher-secound-slide">
                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="/img/teacher/tb-1.png" alt="">
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Daniel Alvares</span>
                        <span class="teacher-designation">BIM</span>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="/img/teacher/tb-1.png" alt="">
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Daniel Alvares</span>
                        <span class="teacher-designation">BIM</span>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="/img/teacher/tb-1.png" alt="">
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Daniel Alvares</span>
                        <span class="teacher-designation">BIM</span>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="/img/teacher/tb-1.png" alt="">
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Daniel Alvares</span>
                        <span class="teacher-designation">BIM</span>
                    </div>
                </div>
            </div>

            {{--        <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">--}}
            {{--            <a href="#">All teacher <i class="fas fa-caret-right"></i></a>--}}
            {{--        </div>--}}
        </div>
    </section>
    <!-- End teacher section
        ============================================= -->
@endsection
