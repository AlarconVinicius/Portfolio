@csrf
<input type="hidden" name="id" value="{{ $profileInformation->id ?? null }}" />
<input type="hidden" name="user_id" value="{{ $profileInformation->user_id ?? $user_id }}" />
<div class="form-group">
    <label for="name" class="control-label">Nome</label>
    <input type="text" id="name" name="name" class="form-control"  value="{{ $profileInformation->name ?? old('name') }}"/>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="address" class="control-label">Endereço</label>
    <input type="text" id="address" name="address" class="form-control"  value="{{ $profileInformation->address ?? old('address') }}"/>
    @error('address')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="email" class="control-label">E-mail</label>
    <input type="email" id="email" name="email" class="form-control"  value="{{ $profileInformation->email ?? old('email') }}"/>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="resume_link" class="control-label">Link do Currículo</label>
    <input type="text" id="resume_link" name="resume_link" class="form-control"  value="{{ $profileInformation->resume_link ?? old('resume_link') }}"/>
    @error('resume_link')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="linkedin_link" class="control-label">Link do LinkedIn</label>
    <input type="text" id="linkedin_link" name="linkedin_link" class="form-control"  value="{{ $profileInformation->linkedin_link ?? old('linkedin_link') }}"/>
    @error('linkedin_link')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="specialty" class="control-label">Especialidade</label>
    <input type="text" id="specialty" name="specialty" class="form-control"  value="{{ $profileInformation->specialty ?? old('specialty') }}"/>
    @error('specialty')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="specialty_text" class="control-label">Texto de Especialidade</label>
    <textarea id="specialty_text" name="specialty_text" class="form-control">{{ $profileInformation->specialty_text ?? old('specialty_text') }}</textarea>
    @error('specialty_text')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="about" class="control-label">Sobre</label>
    <textarea id="about" name="about" class="form-control">{{ $profileInformation->about ?? old('about') }}</textarea>
    @error('about')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="contact_me" class="control-label">Contate-me</label>
    <textarea id="contact_me" name="contact_me" class="form-control">{{ $profileInformation->contact_me ?? old('contact_me') }}</textarea>
    @error('contact_me')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
