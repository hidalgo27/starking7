@extends('layouts.default')
@section('content')

    <section id="certificacion-global" class="best-course-section">
        <div class="container">


            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Starking7</span>
                <h2 class="text-l">CONSTRUCCION <span>y BIENES RAICES</span></h2>
                {{--                <p>Nuestros proyectos y construcciones destacan por su calidad y distinción, logrando edificaciones funcionalmente eficientes y estructuralmente seguras, ya que contamos con un equipo profesional especializado para cada especialidad con el objetivo de garantizar el confort y plena satisfacción de nuestros clientes.</p>--}}
            </div>


            <div class="affiliate-market-guide mb65">
                <div class="row">
                    @foreach($portafolio as $portafolios)
                    <div class="col-4">
                        <div class="course-item-pic-text">
                            <div class="course-pic relative-position mb25">
                                @php $carpeta =  str_replace(' ', '-', $portafolios->nombre) @endphp
                                <a href="{{route('construccion_detail', [$portafolios->id])}}"><img src="{{asset('img/construccion-bienes')}}/{{$carpeta}}/{{$portafolios->imagen}}" alt="" class="w-100 bw"></a>
                            </div>
                            <div class="course-item-text">
                                <div class="course-title mt10 headline pb45 relative-position">
                                    <h3><a href="" class="text-capitalize">{{$portafolios->nombre}}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>

            

        </div>
    </section>

@endsection
