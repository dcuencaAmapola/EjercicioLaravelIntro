@extends('layout')

@section('content')
    <h1>Crear Proyecto</h1>
    <form method="POST" action="{{ route('projects.store')}}">
        @csrf
        <label>Titulo del Proyecto<br>
            <input type="text" name="title">
        </label>
        <br>
        <label>URL del Proyecto<br>
            <input type="text" name="url">
        </label>
        <br>
        <label>
            Descripcion del Proyecto<br>
            <textarea name="description"></textarea>
        </label>
        <br>
        <button type="submit">Save</button>
    </form>
@endsection
