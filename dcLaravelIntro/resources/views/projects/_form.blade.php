@csrf
<div class="form-group">
    <label for="title">Titulo del Proyecto<br>
        <input class="form-control border-0 bg-light shadow-sm"
            id="title"
            type="text"
            name="title"
            value="{{ old('title',$project->title) }}">
    </label>
</div>
<div class="form-group">
    <label for="url">URL del Proyecto<br>
        <input class="form-control border-0 bg-light shadow-sm"
            type="text"
            id="url"
            name="url"
            value="{{ old('url',$project->url) }}">
    </label>
</div>

<div class="form-group">
    <label for="description">Descripcion del Proyecto<br>
        <textarea class="form-control border-0 bg-light shadow-sm"
            id="description"
            name="description">{{ old('description',$project->description) }}</textarea>
    </label>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
