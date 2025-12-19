@extends('layouts.app')

@section('titulo', 'Editar Bug')

@section('contenido')

    <h1>Editar Bug</h1>

    <form action="{{ route('videojuegos.update', $videojuego) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Título *</label>
            <input type="text" name="titulo" class="form-control" value="{{ $videojuego->titulo }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Módulo *</label>
            <input type="text" name="modulo" class="form-control" value="{{ $videojuego->modulo }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gravedad *</label>
            <select name="gravedad" class="form-select" required>
                <option value="Baja" {{ $videojuego->gravedad == 'Baja' ? 'selected' : '' }}>Baja</option>
                <option value="Media" {{ $videojuego->gravedad == 'Media' ? 'selected' : '' }}>Media</option>
                <option value="Alta" {{ $videojuego->gravedad == 'Alta' ? 'selected' : '' }}>Alta</option>
                <option value="Crítica" {{ $videojuego->gravedad == 'Crítica' ? 'selected' : '' }}>Crítica</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado" class="form-select">
                <option value="NEW" {{ $videojuego->estado == 'NEW' ? 'selected' : '' }}>NEW</option>
                <option value="REV" {{ $videojuego->estado == 'REV' ? 'selected' : '' }}>REV</option>
                <option value="FIX" {{ $videojuego->estado == 'FIX' ? 'selected' : '' }}>FIX</option>
                <option value="INV" {{ $videojuego->estado == 'INV' ? 'selected' : '' }}>INV</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Pasos para reproducir *</label>
            <textarea name="pasos_reproduccion" class="form-control" rows="3" required>{{ $videojuego->pasos_reproduccion }}</textarea>
        </div>

        <a href="{{ route('videojuegos.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

        <button type="submit" class="btn btn-primary">
            Actualizar
        </button>
    </form>

@endsection
