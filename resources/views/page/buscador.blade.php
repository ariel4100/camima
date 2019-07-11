@extends('page.layouts.app')
@push('style')
    <style>
        #myClassicTab .nav-link{
            color: #000 !important;
        }
        #myClassicTab li .active{
            border-bottom: 2px solid #FFB900 !important;
        }
        #myClassicTab li a{
            border-bottom: 2px solid transparent;
        }
    </style>
@endpush
@section('content')
    <div class="container" style="margin-top: 8rem">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-2" style="border-bottom: 2px solid #133165; width: 100px">Buscador</h2>
            </div>
        </div>
        <form class="row justify-content-center my-4" action="{{ route('buscador') }}" method="get">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control my-2" placeholder="Buscar...">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-md text-white px-5 m-0 my-2" style="background-color: #133165">Buscar</button>
            </div>
        </form>


        <div class="row my-5">
            @forelse($resultado as $item)
                {{--@dd($item->image[0]['image'])--}}
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
                <div class="col">
                    <h4>No se encontraron resultados</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection
