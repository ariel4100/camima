@extends('page.layouts.app')

@section('content')
<div class="container" style="margin-top: 9rem">
    <div class="row">
        <div class="col-md-9">
            @forelse($novedades as $n)
                <span class="text-white px-5 p-2" style="background-color: #0AC7FF;">{!! $n->Category->title !!}</span>
                <div class="row  border-top py-5">
                    <div class="col-md-4 wow fadeIn">
                        <img src="{{ asset('imagenes/novedades/'.$n->ruta) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('show',$n->id) }}" class="" style="color: unset">
                            <h4 class="font-weight-bold">{!! $n->titulo !!}</h4>
                            {!!  $n->breve   !!}
                        </a>
                    </div>
                </div>
            @empty
                <h4>No hay registros</h4>
            @endforelse
            {!! $novedades->render() !!}
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
