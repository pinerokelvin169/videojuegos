@extends('layouts.app')

@section('titulo', 'Videojuegos')

@section('contenido')

    <h1>Listado de Bugs</h1>

    <a href="{{ route('videojuegos.create') }}" class="btn btn-primary mb-3">
        Nuevo Bug
    </a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Título</th>
            <th>Módulo</th>
            <th>Gravedad</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach($videojuegos as $videojuego)
            <tr>
                <td>{{ $videojuego->titulo }}</td>
                <td>{{ $videojuego->modulo }}</td>
                <td>{{ $videojuego->gravedad }}</td>
                <td>{{ $videojuego->estado }}</td>
                <td>{{ $videojuego->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('videojuegos.show', $videojuego) }}" class="btn btn-sm btn-info">
                        Ver
                    </a>

                    <a href="{{ route('videojuegos.edit', $videojuego) }}" class="btn btn-sm btn-warning">
                        Editar
                    </a>

                    <form action="{{ route('videojuegos.destroy', $videojuego) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Está seguro de eliminar este bug?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
