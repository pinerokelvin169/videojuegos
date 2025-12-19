@extends('layouts.app')

@section('titulo', 'Detalle del Bug')

@section('contenido')

    <h2>Detalle del Bug</h2>

    <p><strong>Título:</strong> {{ $videojuego->titulo }}</p>
    <p><strong>Módulo:</strong> {{ $videojuego->modulo }}</p>
    <p><strong>Gravedad:</strong> {{ $videojuego->gravedad }}</p>
    <p><strong>Estado:</strong> {{ $videojuego->estado }}</p>
    <p><strong>Pasos para reproducir:</strong></p>
    <p>{{ $videojuego->pasos_reproduccion }}</p>

    <a href="{{ route('videojuegos.index') }}" class="btn btn-secondary">
        Volver
    </a>

@endsection
