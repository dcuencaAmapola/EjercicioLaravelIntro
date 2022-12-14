@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4"
                    method="POST" action="{{ route('messages.store') }}">
                    @csrf
                    <h1 class="display-4">Contacto</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror"
                            id="name"
                            name="name"
                            placeholder="Nombre..."
                            value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input class="form-control bg-light shadow-sm  @error('email') is-invalid @else border-0 @enderror"
                            type="text"
                            id="email"
                            name="email"
                            placeholder="Email..."
                            value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Tema</label>
                        <input class="form-control bg-light shadow-sm  @error('subject') is-invalid @else border-0 @enderror"
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="Asunto..."
                            value="{{ old('subject') }}">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        <textarea class="form-control bg-light shadow-sm  @error('content') is-invalid @else border-0 @enderror"
                            type="text"
                            id="content"
                            name="content"
                            placeholder="Mensaje..."
                            value="{{ old('content') }}"></textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>

                    <!--<input type="text" name="email" placeholder="Email..."value="/*{{ old('email') }}"><br>
                    {!! $errors->first('email', '<small>:message</small><br>') !!}

                    <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
                    {!! $errors->first('subject', '<small>:message</small><br>') !!}

                    <textarea name="content" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
                    {!! $errors->first('content', '<small>:message</small><br>') !!}--->

                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>
            </div>
        </div>

    </div>
@endsection

