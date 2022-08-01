@extends('layout')

@section('content')
    <h1>Portfolio</h1>
    <a href="{{ route('projects.create')}}">Crear</a>
    <ul>
        @forelse($projects as $project)
            <li><a href="{{ route('projects.show', $project)}}">{{ $project->title }}</a></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection
