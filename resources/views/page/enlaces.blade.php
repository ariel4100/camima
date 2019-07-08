@extends('page.layouts.app')

@section('content')

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
        <div class="row">
        @forelse($contenido->image as $item)

                <div class="col-md-3 text-center mt-4">

                    <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                    <p class="m-0 mt-3" style="color: #133165;">{!! $item{'title_es'} !!}</p>
                    <a href="{!! $item{'link'} !!}" class="">{!! $item{'link'} !!}</a>
                </div>

        @empty
            <h4>No hay registro</h4>
        @endforelse
        </div>

    </div>

@endsection
