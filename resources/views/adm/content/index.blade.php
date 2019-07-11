@extends('adm.layouts.app')

@section('content')
    <div class="container my-5">
        <form class="row" method="POST" action="{{ route('contenido.update',$section) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="section" value="{{$section}}">
            @if($section == 'home')
                {{--@dd($contenido)--}}
                <gallery-component :galeria="{{ json_encode($contenido->image) ?? '' }}"></gallery-component>
                <video-component :galeria="{{ json_encode($contenido->video) ?? '' }}"></video-component>

            @endif

            @if($section == 'nosotros' || $section == 'misionyvision')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <div class="md-form col-md-12">
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>
                </div>
            @endif

            @if($section == 'autoridades')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <gallery-component :section="{{ json_encode($section) }}" :galeria="{{ json_encode($contenido->image) }}"></gallery-component>
            @endif

            @if($section == 'interes')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <gallery-component :section="{{ json_encode($section) }}" :galeria="{{ json_encode($contenido->image) }}"></gallery-component>
            @endif

            @if($section == 'objetivos')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <div class="md-form col-md-12">
                    <p class="m-0">Frase</p>
                    <textarea id="subtext_es" class="md-textarea form-control" name="subtext_es" rows="3">{!! $contenido->text{'subtext_es'} ?? '' !!}</textarea>
                </div>
                <div class="md-form col-md-12">
                    <p class="m-0">Texto</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>
                </div>

            @endif


            @if($section == 'nuestrasede')
            <div class="md-form col-md-6">
                <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
            </div>
            <div class="md-form col-md-6">
                <div class="">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile01"  aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01" data-browse="subir">Imagen principal</label>
                    </div>
                </div>

            </div>
            <div class="md-form col-md-12">
                <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>
            </div>
            <div class="md-form col-md-6">
                <textarea id="text_en" class="md-textarea form-control" name="text_2" rows="3">{!! $contenido->text{'text_2'} ?? '' !!}</textarea>
            </div>
            <div class="md-form col-md-6">
                <textarea id="subtext_es" class="md-textarea form-control" name="text_3" rows="3">{!! $contenido->text{'text_3'} ?? '' !!}</textarea>
            </div>
                <gallery-component :section="{{ json_encode($section) }}" :galeria="{{ json_encode($contenido->image) }}"></gallery-component>
            @endif

            @if($section == 'asesorias')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <gallery-component :section="{{ json_encode($section) }}" :galeria="{{ json_encode($contenido->image) }}"></gallery-component>
            @endif

            @if($section == 'uom')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <gallery-component :section="{{ json_encode($section) }}" :galeria="{{ json_encode($contenido->image) }}"></gallery-component>
            @endif









            @if($section == 'logos')
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="Favicon" name="gallery[{{ $i }}][image]" value="{{ $contenido->image[$i]{'image'} ?? '' }}" lang="es">
                                <label class="custom-file-label" for="Favicon" data-browse="Subir">Seleccionar {{ $i==0 ? 'Header' : null }} {{ $i==1 ? 'Favicon' : null }} {{ $i==2 ? 'Footer' : null }}</label>
                            </div>
                            <input type="hidden" class=" "  name="gallery[{{ $i }}][image]" value="{{ $contenido->image[$i]{'image'} ?? '' }}" >
                            <img src="{{ asset($contenido->image[$i]{'image'} ?? '') }}" alt="" class="img-fluid my-4">
                        </div>
                    @endfor
                        {{--@forelse (optional($contenido)->image as $item)--}}
                            {{--<div class="col-md-4">--}}
                                {{--<img src="{{ asset($item->{'imagen'}) }}" alt="" class="img-fluid my-4">--}}
                            {{--</div>--}}
                        {{--@empty--}}

                        {{--@endforelse--}}



                    {{--<div class="col-md-12">--}}
                        {{--<div class="custom-file">--}}
                            {{--<input type="file" class="custom-file-input" id="Header" name="header" lang="es">--}}
                            {{--<label class="custom-file-label" for="Header" data-browse="Buscar">Seleccionar Logo Header</label>--}}
                        {{--</div>--}}
                        {{--<img src="{{ asset($contenido->text{'header'}) }}" alt="" class="img-fluid my-4">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="custom-file">--}}
                            {{--<input type="file" class="custom-file-input" id="Footer" name="footer" lang="es">--}}
                            {{--<label class="custom-file-label" for="Footer" data-browse="Buscar">Seleccionar Logo Footer</label>--}}
                        {{--</div>--}}
                        {{--<img src="{{ asset($contenido->text{'footer'}) }}" alt="" class="img-fluid my-4">--}}
                    {{--</div>--}}
                </div>
            @endif
            @if($section == 'contacto')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">
                </div>

                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Dirección" name="direccion" placeholder="Dirección" class="form-control" value="{!! $contenido->text{'direccion'} !!}">
                    </div>
                    <div class="row">
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_1" name="telefono_1" placeholder="Telefono" class="form-control" value="{!! $contenido->text{'telefono_1'} !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Correo" name="correo" placeholder="Correo" class="form-control" value="{!! $contenido->text{'correo'} !!}">
                        </div>
                        {{--<div class="md-form col-md-6">--}}
                            {{--<input type="text" id="Telefono_2" name="telefono_2" placeholder="Telefono 2" class="form-control" value=" ">--}}
                        {{--</div>--}}
                        <div class="col-md-12">
                            <h6>PDF del Encabezado de pagina</h6>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="Footer" name="contacto" lang="es">
                                <label class="custom-file-label" for="Footer" data-browse="Buscar">Seleccionar Formulario de contacto</label>
                            </div>
                            <img src="{{ asset($contenido->text{'contacto'} ?? '') }}" alt="" class="img-fluid my-4">
                        </div>
                    </div>
                    <div class="md-form col-md-12">
                        <h6>Descripcion del Pie de pagina</h6>
                        <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="md-form col-md-6">--}}
                            {{--<input type="text" id="Correo" name="correo" placeholder="Correo 1" class="form-control" value="{!!  isset($datos['correo']) ? $datos['correo'] : null !!}">--}}
                        {{--</div>--}}
                        {{--<div class="md-form col-md-6">--}}
                            {{--<input type="text" id="Correo_2" name="correo_2" placeholder="Correo 2" class="form-control" value="{!!  isset($datos['correo_2']) ? $datos['correo_2'] : null !!}">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            @endif
            @if($section == 'redes')
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" name="facebook" placeholder="URL Facebook" class="form-control" value="{!! $contenido->text{'facebook'} ?? '' !!}">
                    </div>
                    <div class="md-form">
                        <input type="text" id="Titulo" name="twitter" placeholder="URL Twitter" class="form-control" value="{!! $contenido->text{'twitter'} ?? '' !!}">
                    </div>
                    {{--<div class="md-form">--}}
                        {{--<input type="text" id="Titulo" name="youtube" placeholder="URL Youtube" class="form-control" value="{!! isset($data['youtube']) ? $data['youtube'] : null !!}">--}}
                    {{--</div>--}}
                </div>
            @endif
            @if($section == 'condiciones')
                <div class="md-form col-md-12">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>

                <div class="md-form col-md-12">
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>
                </div>


            @endif
 
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>

        CKEDITOR.replace('text_es');
        CKEDITOR.replace('subtext_es');
        CKEDITOR.replace('text_en');

    </script>
    <script>

        CKEDITOR.replace('valorestext_en');
        CKEDITOR.replace('valorestext_es');
        CKEDITOR.replace('misiontext_es');
        CKEDITOR.replace('misiontext_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush
