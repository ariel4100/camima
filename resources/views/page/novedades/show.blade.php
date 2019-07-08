@extends('page.layouts.app')

@section('content')

<div class="container" style="margin-top: 9rem">
    <div class="row">
        <div class="col-md-9">
            <span class="text-white px-5 p-2" style="background-color: #0AC7FF;">{!! $news->Category->title !!}</span>
            <div class="row  border-top py-5">
                <div class="col-md-12 wow fadeIn">
                    <img src="{{ asset('imagenes/novedades/'.$news->ruta) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-12 my-5">
                    <h4 class="font-weight-bold mb-4">{!! $news->titulo !!}</h4>
                    {!!  $news->descripcion   !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h4 class="text-uppercase text-white p-2" style="background-color: #0AC7FF">Categorías</h4>
            <hr class=" " style="color: #595959">
            @forelse($categorias as $c)
                <p class="m-0"><a href="{{ route('show_index',$c->id) }}" class="" style="color: unset;">{!! $c->title !!}</a></p>
            @empty
                <p>No hay registros</p>
            @endforelse
        </div>
    </div>

</div>
@endsection
