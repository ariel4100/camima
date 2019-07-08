@extends('page.layouts.app')

@section('content')

    <!--Slides-->
    @include('page.partials.carousel')
    <!--/.Slides-->
    <div class="container" style="margin-top: 8rem">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">CAPACITACIÓN</li>
                <li class="ml-2"> {!! '| '. 'CURSOS ESTANDAR Y REUNIONES' ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4">{!! $curso->titulo !!}</h1>
        <hr class="my-4">
        {!! $curso->descripcion2 !!}
        <h4 class="my-4" STYLE="color: #133165;">MODALIDAD DE CURSADO</h4>
        <hr class="my-4">
        <div class="row mb-5">
            <div class="col-md-12">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 py-2 text-center" style="border: 1px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0">
                                    DESTINATARIOS
                                </h5>
                            </a>
                        </div>

                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                labore sustainable VHS.
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Accordion wrapper -->
            </div>
        </div>
    </div>
@endsection
