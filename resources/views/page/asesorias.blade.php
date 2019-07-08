@extends('page.layouts.app')

@section('content')

    <!--Slides-->
    @include('page.partials.carousel')
    <!--/.Slides-->

    <div class="container my-5">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">SERVICIOS </li>
                <li class="ml-2"> {!! '| '. $contenido->text{'title_es'} ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4">{!! $contenido->text{'title_es'} ?? '' !!}</h1>
        <hr class="my-4">
        <div class="row mb-5">
            @forelse($contenido->image as $item)

                <div class="col-md-3 text-center mt-5">

                    <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                    <p class="my-3 text-white" ><span class="p-1" style="background-color: #0AC7FF">{!! $item{'title_es'} ?? '' !!}</span></p>
                </div>

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
    </div>
@endsection
