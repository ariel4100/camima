@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('categoria.create') }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Habilitado</th>
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($contenido as $item)
                        <tr>
                            <td>{{ $item->titulo }}</td>
                            <td>{{ $item->habilitado ? 'si' : 'no' }}</td>
                            <td>{{ $item->orden }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('pdf', ['id' => $item->id, 'gremial' => $gremial]) }}">PDF</a>
                                <a class="btn btn-sm btn-warning" href="{{ route('categoria.edit', $item->id) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href="{{ route('categoria.destroy', $item->id) }}"
                                   onclick="event.preventDefault();document.getElementById('DELETE-form').submit();">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <form id="DELETE-form" action="{{ route('categoria.destroy', $item->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
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
