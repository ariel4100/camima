@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('noticia.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('noticia.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="md-form col-md-6">
                <input type="text" id="title_es" name="titulo" placeholder="Titulo" class="form-control">
            </div>
            <div class="col-md-6  ">
                <div class="md-form">
                    <input type="text" id="order" name="orden" class="form-control">
                    <label for="order" class="" >Orden</label>
                </div>
            </div>

            <div class="md-form col-md-12">
                <p class="mb-0">Descripcion</p>
                <textarea id="text_es" class="md-textarea form-control" name="descripcion" rows="3"> </textarea>
            </div>

            <div class="col-md-6 mb-5">
                <select name="category_id" id="" class="form-control">
                    <option value="" selected disabled>Seleccionar categoria</option>
                    @forelse($categories as $c)
                        <option value="{{ $c->id }}">{!! $c->title !!}</option>
                    @empty
                        <option value="" disabled >No hay categorias</option>
                    @endforelse
                </select>
            </div>
            <div class="col-md-3 mb-5">
                <select name="habilitado" id="" class="form-control">
                    <option value="" selected disabled>Habilitado:</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>
            <div class="col-md-3 mb-5">
                <select name="portada" id="" class="form-control">
                    <option value="" selected disabled>Portada:</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
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
            {{--<gallery-component></gallery-component>--}}
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
