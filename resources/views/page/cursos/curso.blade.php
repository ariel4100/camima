@extends('page.layouts.app')

@section('content')

    <!--Slides-->
    @include('page.partials.carousel')
    <!--/.Slides-->
    <div class="container" style="margin-top: 3rem">
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
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#destinatarios" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2">
                                    DESTINATARIOS
                                </h5>
                            </a>
                        </div>

                        <div id="destinatarios" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!!  $curso->destinatarios !!}
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#contenido" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2 text-uppercase">
                                    CONTENIDO del curso
                                </h5>
                            </a>
                        </div>

                        <div id="contenido" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!! $curso->contenido !!}
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#inversion" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2 text-uppercase">
                                    inversion
                                </h5>
                            </a>
                        </div>

                        <div id="inversion" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!!  $curso->inversion !!}
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#duracion" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2 text-uppercase">
                                    duracion
                                </h5>
                            </a>
                        </div>

                        <div id="duracion" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!!  $curso->duracion !!}
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#cronograma" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2 text-uppercase">
                                    cronograma
                                </h5>
                            </a>
                        </div>

                        <div id="cronograma" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!!  $curso->cronograma !!}
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#lugar" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2 text-uppercase">
                                    lugar
                                </h5>
                            </a>
                        </div>

                        <div id="lugar" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!!  $curso->lugar !!}
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-none ">
                        <div class="card-header border-bottom" role="tab" id="headingOne1" style="background-color: unset">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#capacitador" aria-expanded="true"
                               aria-controls="collapseOne1" class="d-flex" style="color: unset">
                                <span class="px-2 text-center rounded-circle" style="border: 2px solid #133165; border-radius: 50%">+</span>
                                <h5 class="mb-0 ml-2 text-uppercase">
                                    capacitador
                                </h5>
                            </a>
                        </div>

                        <div id="capacitador" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                {!!  $curso->capacitador !!}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Accordion wrapper -->
            </div>
        </div>
    </div>
@endsection
