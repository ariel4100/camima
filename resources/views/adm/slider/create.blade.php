@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('slider.list', ['seccion' => $section]) }}"><< Volver</a>

        <section class=" ">
            <form class="row" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                @csrf
                @if($section != 'institucional' || $section != 'servicios' || $section != 'gremiales')
                <input type="hidden" name="section" value="{{$section}}">
                @endif
                <div class="md-form col-md-12">
                    <input type="text" id="order" name="order" placeholder="Orden" class="form-control" value="">
                </div>
                <div class="md-form col-md-12">
                    <p class="mb-0">Texto</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"> </textarea>
                </div>
                <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                        <label class="custom-file-label" for="customFileLang" data-browse="Subir">Seleccionar Imagen</label>
                    </div>
                    <small class="m-0 text-muted">Tamaño recomendado: 1350 x 455 px</small>
                </div>
                @if($section == 'institucional')
                <div class="col-md-12 my-4">
                    <div class="input-group mb-3">

                        <select class="custom-select" name="section" id="inputGroupSelect01">
                            <option selected>Seleccionar sección...</option>
                            <option value="nosotros">Quienes somos</option>
                            <option value="autoridades">Autoridades</option>
                            <option value="objetivos">Objetivos</option>
                            <option value="misionyvision">Mision y Vision</option>
                            <option value="interes">Enlaces de interes</option>
                        </select>
                    </div>
                </div>
                @endif
                @if($section == 'servicios')
                    <div class="col-md-12 my-4">
                        <div class="input-group mb-3">

                            <select class="custom-select" name="section" id="inputGroupSelect01">
                                <option selected>Seleccionar sección...</option>
                                <option value="nuestrasede">Nuestra Sede</option>

                            </select>
                        </div>
                    </div>
                @endif
                @if($section == 'gremiales')
                    <div class="col-md-12 my-4">
                        <div class="input-group mb-3">

                            <select class="custom-select" name="section" id="inputGroupSelect01">
                                <option selected>Seleccionar sección...</option>
                                <option value="uom">UOM</option>
                                <option value="asimra">Asimra</option>
                            </select>
                        </div>
                    </div>
                @endif

                @if($section == 'capacitaciones')
                    <div class="col-md-12 my-4">
                        <div class="input-group mb-3">

                            <select class="custom-select" name="section" id="inputGroupSelect01">
                                <option selected>Seleccionar sección...</option>
                                <option value="cursos">Cursos estandar</option>
                                <option value="otros">Cursos especiales</option>
                            </select>
                        </div>
                    </div>
                @endif

                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </section>
    </div>
@endsection
@push('script')
    <script>
        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush
