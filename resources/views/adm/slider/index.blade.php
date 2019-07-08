@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('slider.create',['seccion' => $section]) }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        @if($section == 'institucional' || $section == 'gremiales')
                        <th scope="col">Seccion</th>
                        @endif
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($slider as $item)
                        <tr>
                            <td><img src="{{  asset($item->image) }}" style="width: 150px"></td>

                            @switch($item->section)
                                @case('nosotros')
                                <td>Quienes somos</td>
                                @break

                                @case('autoridades')
                                <td>Autoridades</td>
                                @break

                                @case('objetivos')
                                <td>Objetivos</td>
                                @break

                                @case('autoridades')
                                <td>Autoridades</td>
                                @break

                                @case('misionyvision')
                                <td>Mision y Visión</td>
                                @break

                                @case('interes')
                                <td>Enlaces de interes</td>
                                @break

                                @case('nuestrasede')
                                <td>Nuestra Sede</td>
                                @break

                                @case('Asesorias')
                                <td>Asesorias</td>
                                @break

                                @case('cursos')
                                <td>Cursos y Reuniones</td>
                                @break

                                @case('asimra')
                                <td>Asimra</td>
                                @break

                                @case('uom')
                                <td>UOM</td>
                                @break


                                @default
                                <span> </span>
                            @endswitch
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('slider.edit', ['slider' => $item->id]) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href="{{ route('slider.destroy', ['slider' => $item->id]) }}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay registros</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
