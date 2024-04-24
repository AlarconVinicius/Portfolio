@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<h3>Você tem certeza que deseja deletar?</h3>
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

    <form action="{{ route('services.destroy', $service->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar" class="btn btn-danger" /> |
        <a href="{{ route('services.index') }}">Voltar</a>
    </form>

@endsection
