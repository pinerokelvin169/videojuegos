@extends('layouts.app')

@section('titulo', 'Nuevo Bug')

@section('contenido')

    <h1>Registrar Bug</h1>

    <form action="{{ route('videojuegos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Título *</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Módulo *</label>
            <input type="text" name="modulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gravedad *</label>
            <select name="gravedad" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="Baja">Baja</option>
                <option value="Media">Media</option>
                <option value="Alta">Alta</option>
                <option value="Crítica">Crítica</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Pasos para reproducir *</label>
            <textarea name="pasos_reproduccion" class="form-control" rows="3" required></textarea>
        </div>

        <a href="{{ route('videojuegos.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

        <button type="submit" class="btn btn-primary">
            Guardar
        </button>
    </form>

@endsection
