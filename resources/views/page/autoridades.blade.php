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
        <hr class="my-4">
        {!! $contenido->text{'text_es'} ?? '' !!}

        <div class="row justify-content-center pb-5 border-bottom">
            @forelse($contenido->image as $item)
                @if($item{'nivel'} == 1)
                    <div class="col-md-6  d-flex align-items-center mt-4 ">
                        <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                        <div class="ml-4">
                            <h4 class=" mt-3" style="color: #133165;">{!! $item{'title_es'} !!}</h4>
                            <span class="p-1 text-white" style="background-color: #0AC7FF">{!! $item{'position_es'} !!}</span>
                        </div>
                    </div>
                @endif

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>

        <div class="row justify-content-center pb-5 border-bottom">
            @forelse($contenido->image as $item)
                @if($item{'nivel'} == 2)
                    <div class="col-md-6  d-flex align-items-center mt-4 ">
                        <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                        <div class="ml-4">
                            <h4 class=" mt-3" style="color: #133165;">{!! $item{'title_es'} !!}</h4>
                            <span class="p-1 text-white" style="background-color: #0AC7FF">{!! $item{'position_es'} !!}</span>
                        </div>
                    </div>
                @endif

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
        <div class="row justify-content-center pb-5 border-bottom">
            @forelse($contenido->image as $item)
                @if($item{'nivel'} == 3)
                    <div class="col-md-3 text-center mt-4 ">
                        <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                        <h4 class=" my-3" style="color: #133165;">{!! $item{'title_es'} !!}</h4>
                        <span class="p-1 text-white" style="background-color: #0AC7FF">{!! $item{'position_es'} !!}</span>
                    </div>
                @endif

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
        <div class="row justify-content-center pb-5 border-bottom">
            @forelse($contenido->image as $item)
                @if($item{'nivel'} == 4)
                    <div class="col-md-6  d-flex align-items-center mt-4 ">
                        <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                        <div class="ml-4">
                            <h4 class=" mt-3" style="color: #133165;">{!! $item{'title_es'} !!}</h4>
                            <span class="p-1 text-white" style="background-color: #0AC7FF">{!! $item{'position_es'} !!}</span>
                        </div>
                    </div>
                @endif

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
        <div class="conta iner d-flex justify-content-center  pb-5 border-bottom">
            @forelse($contenido->image as $k=>$item)
                @if($item{'nivel'} == 5)
                    <div class="col-md -3  text-center mt-4">
                        <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                        <h4 class=" my-3 @if($k == 11) mb-5 @endif" style="color: #133165;">{!! $item{'title_es'} !!}</h4>

                        @if($k == 11)<span class="p-1 text-white" style="background-color: #0AC7FF">{!! $item{'position_es'} !!}</span>@endif
                    </div>


                @endif
            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
    </div>
@endsection
