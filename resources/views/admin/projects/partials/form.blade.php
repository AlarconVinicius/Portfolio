@csrf
<div class="text-danger"></div>
<input type="hidden" name="id" value="{{ $project->id ?? null }}" />
<div class="form-group">
    <label for="title" class="control-label">Título</label>
    <input type="text" id="title" name="title" class="form-control" value="{{ $project->title ?? old('title') }}"/>
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="description" class="control-label">Descrição</label>
    <textarea id="description" name="description" class="form-control">{{ $project->description ?? old('description') }}</textarea>
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="language" class="control-label">Linguagem</label>
    <input type="text" id="language" name="language" class="form-control"  value="{{ $project->language ?? old('language') }}"/>
    @error('language')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="link" class="control-label">Link</label>
    <input type="text" id="link" name="link" class="form-control"  value="{{ $project->link ?? old('link') }}"/>
    @error('link')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
