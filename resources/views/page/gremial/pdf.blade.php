@extends('page.layouts.app')
@push('style')
    <style>
        @media only screen and (max-width: 600px){

            .d-n-flex{
                display: unset !important;
            }
        }

    </style>
@endpush
@section('content')

    <!--Slides-->
    @include('page.partials.carousel')
    <!--/.Slides-->
    <div class="container" style="margin-top: 3rem">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">GREMIALES </li>
                {{--<li class="ml-2"> {!! '| '. 'UOM' ?? '' !!}</li>--}}
                <li class="ml-2"> {!! '| '. $gremial->titulo ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4 text-uppercase">{!! $gremial->titulo !!}</h1>
        <hr class="my-4">
        <div class="row mb-5">
            @forelse($pdf as $item)

                <div class="col-md-12  border-bottom py-4 d-flex d-n-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('imagenes/iconos/download.png') }}" alt="" class="img-fluid">
                        <p class="my-3 ml-3" style="color:#133165;" >{!! $item->titulo ?? '' !!}</p>
                    </div>
                    <a href="{{ asset('archivos/'.$item->pdf) }}" target="_blank" class="btn rounded-pill" style="color: #133165; border: 2px solid #133165">Descargar</a>
                </div>

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
    </div>
@endsection
