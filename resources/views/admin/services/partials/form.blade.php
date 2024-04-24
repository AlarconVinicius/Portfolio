@csrf
<input type="hidden" name="id" value="{{ $service->id ?? null }}" />

<div class="form-group">
    <label for="name" class="control-label">Nome</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ $service->name ?? old('name') }}"/>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="description" class="control-label">Descrição</label>
    <textarea id="description" name="description" class="form-control">{{ $service->description ?? old('description') }}</textarea>
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="icon" class="control-label">Ícone</label>
    <input type="text" id="icon" name="icon" class="form-control" value="{{ $service->icon ?? old('icon') }}"/>
    @error('icon')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
