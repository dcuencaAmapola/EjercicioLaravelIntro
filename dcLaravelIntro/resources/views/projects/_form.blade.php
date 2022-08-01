@csrf

<label>Titulo del Proyecto<br>
    <input type="text" name="title" value="{{ old('title',$project->title) }}">
</label>
<br>
<label>URL del Proyecto<br>
    <input type="text" name="url" value="{{ old('url',$project->url) }}">
</label>
<br>
<label>
    Descripcion del Proyecto<br>
    <textarea name="description">{{ old('description',$project->description) }}</textarea>
</label>
<br>

<button type="submit">{{ $btnText }}</button>
