@extends('layouts.default')
@section('content')

    <section id="certificacion-global" class="best-course-section">
        <div class="container">


            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                @foreach($portafolio as $portafolios_i)
                <h2 class="text-l text-uppercase"><span>{{$portafolios_i->nombre}}</span></h2>
                @endforeach
                {{--                <p>Nuestros proyectos y construcciones destacan por su calidad y distinción, logrando edificaciones funcionalmente eficientes y estructuralmente seguras, ya que contamos con un equipo profesional especializado para cada especialidad con el objetivo de garantizar el confort y plena satisfacción de nuestros clientes.</p>--}}
            </div>


            <div class="affiliate-market-guide mb65">

                <div class="row">
                    <div class="col">
                        <div class="tz-gallery">
                            <div class="row">
                                @foreach($portafolio as $portafolios_i)
                                    @foreach($portafolios_i->portafolio_imagen as $port)
                                        @php $carpeta =  str_replace(' ', '-', $portafolios_i->nombre) @endphp
                                <div class="col-sm-12 col-md-4 d-flex">
                                    <a class="lightbox2" href="{{asset('img/construccion-bienes')}}/{{$carpeta}}/{{$port->imagen}}">
                                        <img src="{{asset('img/construccion-bienes')}}/{{$carpeta}}/{{$port->imagen}}" alt="Bridge" loading="lazy">
                                    </a>
                                </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

@endsection
