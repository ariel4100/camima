@extends('page.layouts.app')

@section('content')
    {{--@include('page.partials.carousel')--}}

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
        <div class="row my-5">
            <div class="col-md-6">
                {!! $contenido->text{'text_es'} ?? '' !!}
            </div>
            <div class="col-md-6">
                <img src="{{ asset($contenido->text{'image'}) }}" alt="" class="">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6 border-top border-bottom py-4">
                {!! $contenido->text{'text_2'} ?? '' !!}
            </div>
            <div class="col-md-6 border-top border-bottom py-4">
                {!! $contenido->text{'text_3'} ?? '' !!}
            </div>
        </div>

        <div class="row justify-content-center my-5">
            @forelse($contenido->image as $item)
                <div class="col-md-3 text-center mt-3">
                    <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                    <p class="mt-4">{!! $item{'title_es'} !!}</p>
                </div>
            @empty
            <h4>No hay registro</h4>
            @endforelse
        </div>

    </div>

@endsection
