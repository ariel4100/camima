@extends('page.layouts.app')

@section('content')
    <!--Slides-->
    @include('page.partials.carousel')
    <!--/.Slides-->

    <div class="container" style="margin-top: 8rem">
        <nav aria-label="">
            <ol class="list-unstyled d-flex">
                <li class="ml-2">GREMIALES </li>
                <li class="ml-2"> {!! '| '. 'UOM' ?? '' !!}</li>
            </ol>
        </nav>
        <h1 class="my-4">GREMIALES UOM</h1>
        <hr class="my-4">
        <div class="row mb-5">
            @forelse($uom as $item)

                <div class="col-md-3 text-center mt-5 border-bottom py-4 border-right">
                    <a href="{{ route('page.pdf',['gremial' => 'uom', 'id' => $item->id]) }}" class="">
                        <img src="{{ asset('imagenes/iconos/download.png') }}" alt="" class="img-fluid">
                        <p class="my-3" style="color:#133165;" >{!! $item->titulo ?? '' !!}</p>
                    </a>
                </div>

            @empty
                <h4>No hay registro</h4>
            @endforelse
        </div>
    </div>
@endsection
