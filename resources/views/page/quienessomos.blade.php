@extends('page.layouts.app')

@section('content')
    {{--@include('page.partials.carousel')--}}

        <!--Slides-->
        @include('page.partials.carousel')
        <!--/.Slides-->
    @menu()
    @slot('section',$contenido->section)
    @endmenu

    <div class="container my-5">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">INSTITUCIONAL </li>
                <li class="ml-2"> {!! '| '. $contenido->text{'title_es'} ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4">{!! $contenido->text{'title_es'} ?? '' !!}</h1>
        <hr class="my-4">
        {!! $contenido->text{'text_es'} ?? '' !!}
    </div>

@endsection
