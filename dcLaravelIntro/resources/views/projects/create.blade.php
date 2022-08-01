@extends('layout')

@section('content')
    <h1>Crear Proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store')}}">

        @include('projects._form')

        @include('projects._form', ['btnText' => 'Save'])

    </form>
@endsection
