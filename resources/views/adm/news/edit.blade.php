@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('noticia.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('noticia.update',$noticia->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="md-form col-md-6">
                <input type="text" id="title_es" name="titulo" value="{!! $noticia->titulo !!}" placeholder="Titulo - español" class="form-control">
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <input type="text" id="order" name="orden" value="{!! $noticia->orden !!}" class="form-control">
                    <label for="order" class="" >Orden</label>
                </div>
            </div>
            <div class="md-form col-md-12">
                <p class="mb-0">Descripcion</p>
                <textarea id="text_es" class="md-textarea form-control" name="descripcion" rows="3">{!! $noticia->descripcion !!}</textarea>
            </div>

            <div class="col-md-6 mb-5">
                <select name="category_id" id="" class="form-control">
                    <option value="" selected disabled>Seleccionar categoria</option>
                    @forelse($categories as $c)
                        <option value="{{ $c->id }}" {{ $noticia->category_id == $c->id ? 'selected': '' }}>{!! $c->title !!}</option>
                    @empty
                        <option value="" disabled >No hay categorias</option>
                    @endforelse
                </select>
            </div>

            <div class="col-md-3 mb-5">
                <select name="habilitado" id="" class="form-control">
                    <option value="" selected disabled>Habilitado:</option>
                    <option value="1" {{ $noticia->habilitado == 1 ? 'selected' : '' }}>SI</option>
                    <option value="0" {{ $noticia->habilitado == 0 ? 'selected' : '' }}>NO</option>
                </select>
            </div>
            <div class="col-md-3 mb-5">
                <select name="portada" id="" class="form-control">
                    <option value="" selected disabled>Portada:</option>
                    <option value="1" {{ $noticia->portada == 1 ? 'selected' : '' }}>SI</option>
                    <option value="0" {{ $noticia->portada == 0 ? 'selected' : '' }}>NO</option>
                </select>
            </div>
            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="ruta" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01" data-browse="Subir">Imagen principal</label>
                        <small>Tamaño recomendado: 730 x 540 px</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="pdf" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01" data-browse="Subir">PDF</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <img src="{{ asset('imagenes/novedades/'.$noticia->ruta) }}" alt="" class="img-fluid">
            </div>

            {{--<gallery-component :galeria="{{ json_encode($noticia->image) }}"></gallery-component>--}}
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush
