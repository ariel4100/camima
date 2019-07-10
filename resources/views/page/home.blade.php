@extends('page.layouts.app')

@push('style')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
@endpush
@section('content')
    {{--@include('page.partials.carousel')--}}

        <!--Slides-->
        @include('page.partials.carousel')
        <!--/.Slides-->

    <div class="container my-5">
        <h1>NOTICIAS</h1>
    </div>

    <div class="container">
        <div class="row">
            @forelse($noticias as $k=>$item)
                @if($k == 0)
                    <a href="{{ route('show',$item->id) }}" class="col-md-7">
                        <span class="text-white px-3 p-1 position-absolute" style="background-color: #0AC7FF;">{!! $item->Category->title !!}</span>
                        <img src="{{ asset('imagenes/novedades/'.$item->ruta) }}" alt="" class="img-fluid">
                    </a>
                    <a href="{{ route('show',$item->id) }}" class="col-md-5" style="color: unset">
                        {{--<img src="{{ asset('imagenes/novedades/'.$item->ruta) }}" style="height: 200px; width: 100%" alt="" class="img-fluid">--}}
                        <h3 class="m-0" style="color: #133165">{!! $item->titulo !!}</h3>
                        <p class="py-1" style="color: #133165">{!! $item->descripcion !!}</p>
                    </a>


                @else
                    <a href="{{ route('show',$item->id) }}" class="col-md-4 mt-5">

                        <div class="" style=" height: 200px; background-image: url('{{ asset('imagenes/novedades/'.$item->ruta) }}'); background-repeat: no-repeat; background-size: cover; background-position: center">
                            <span class="text-white px-3 p-1" style="background-color: #0AC7FF;">{!! $item->Category->title !!}</span>
                        </div>
                        {{--<img src="{{ asset('imagenes/novedades/'.$item->ruta) }}" style="height: 200px; width: 100%" alt="" class="img-fluid">--}}
                        <p class="py-1" style="color: #133165">{!! str_limit($item->titulo,40) !!}</p>
                    </a>

                @endif

            @empty

            @endforelse
        </div>
    </div>
    <div class="container my-5">
        <h1>VIDEOS</h1>
    </div>
    <div class="container">
        <div class="row">
            @forelse($contenido->video as $item)
                <div class="col-md-6">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $item{'video'} ?? '' }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="" style="color: #133165">{!! $item{'title_es'} !!}</p>
                </div>
            @empty

            @endforelse
        </div>
    </div>
    <div class="container text-center my-5">
        <h1>NOS APOYAN</h1>
    </div>
    <div class="container multiple-items my-5 ">

            @forelse($contenido->image as $item)
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset($item{'image'}) }}" alt=""  style="height: 100px" class="img-fluid">
                </div>
            @empty

            @endforelse

    </div>
@endsection
@push('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script>
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
@endpush