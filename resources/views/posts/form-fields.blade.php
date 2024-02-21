<div class="form-group">
    <label for="title">Título</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Ingrese el título">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="subtitle">Subtítulo</label>
    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $post->subtitle) }}" placeholder="Ingrese el subtítulo">
    @error('subtitle')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="body">Contenido</label>
    <textarea class="form-control" id="body" name="body" rows="3" style="resize: none;" placeholder="Ingrese el contenido de la publicación">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="image">{{ request()->routeIs('posts.edit') ? 'Cambiar foto (opcional)' : 'Foto' }}</label>
    <input type="file" class="form-control" id="image" name="image" rows="3">
    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
