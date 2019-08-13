@extends('page.layouts.app')

@section('content')

    <!--Slides-->
    @include('page.partials.carousel')
    <!--/.Slides-->
    <div class="container" style="margin-top: 3rem">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">CAPACITACIÓN</li>
                <li class="ml-2"> {!! '| '. 'CURSOS Y SEMINARIOS' ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4">CURSOS Y SEMINARIOS</h1>
        <hr class="my-4">
        <div class="row justify-content-center text-center mb-5">
            @forelse($cursos as $item)
                <div class="col-md-1 mt-5 border-bottom text-center">
                    <h1 class="m-0" style="color:#133165;" >{!! $item->dia ?? '' !!}</h1>
                    @switch($item->mes)
                        @case(1)
                        <h4 class="text-uppercase" style="color:#133165;">Ene</h4>
                        @break

                        @case(2)
                        <h4 class="text-uppercase" style="color:#133165;">Feb</h4>
                        @break

                        @case(3)
                        <h4 class="text-uppercase" style="color:#133165;">Mar</h4>
                        @break

                        @case(4)
                        <h4 class="text-uppercase" style="color:#133165;">Abr</h4>
                        @break

                        @case(5)
                        <h4 class="text-uppercase" style="color:#133165;">May</h4>
                        @break

                        @case(6)
                        <h4 class="text-uppercase" style="color:#133165;">Jun</h4>
                        @break

                        @case(7)
                        <h4 class="text-uppercase" style="color:#133165;">Jul</h4>
                        @break

                        @case(8)
                        <h4 class="text-uppercase" style="color:#133165;">Ago</h4>
                        @break

                        @case(9)
                        <h4 class="text-uppercase" style="color:#133165;">Sep</h4>
                        @break

                        @case(10)
                        <h4 class="text-uppercase" style="color:#133165;">Oct</h4>
                        @break

                        @case(11)
                        <h4 class="text-uppercase" style="color:#133165;">Nov</h4>
                        @break

                        @case(12)
                        <h4 class="text-uppercase" style="color:#133165;">Dic</h4>
                        @break

                        @default
                        <span> </span>
                    @endswitch
                </div>
                <div class="col-md-1 mt-5 border-bottom" >
                    <img src="{{ asset('imagenes/iconos/calendario.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 mt-5 border-bottom">
                    <h5 class="my-2" style="color:#133165;" >{!! $item->titulo ?? '' !!}</h5>
                    <p class="my-0" style="color:#133165;" >{!! $item->descripcion ?? '' !!}</p>
                </div>
                <div class="col-md-2 mt-5 border-bottom">
                    <a href="{{ route('curso.ver',$item->id) }}" class="btn btn-md rounded-pill" style="color: #133165; border: 2px solid #133165">Ver más</a>
                </div>
            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
    </div>
@endsection
