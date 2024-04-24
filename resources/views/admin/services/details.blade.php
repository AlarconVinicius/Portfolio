@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<div>
    <dl class="row">
        <dt class="col-sm-6">Nome</dt>
        <dd class="col-sm-6">{{ $service->name }}</dd>
        <dt class="col-sm-6">Ícone</dt>
        <dd class="col-sm-6">{{ $service->icon }}</dd>
        <dt class="col-sm-6">Descrição</dt>
        <dd class="col-sm-6">{{ $service->description }}</dd>
    </dl>
</div>
<div>
    <a href="{{ route('services.edit', $service->id) }}">Editar</a>
    <a href="{{ route('services.index') }}">Voltar</a>
</div>

@endsection
