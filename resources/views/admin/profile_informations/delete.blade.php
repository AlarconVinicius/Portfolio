@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<h3>Você tem certeza que deseja deletar?</h3>
<hr />
<div>
    <dl class="row">
        <dt class="col-sm-6">Título</dt>
        <dd class="col-sm-6">{{ $project->title }}</dd>
        <dt class="col-sm-6">Descrição</dt>
        <dd class="col-sm-6">{{ $project->description }}</dd>
        <dt class="col-sm-6">Linguagem</dt>
        <dd class="col-sm-6">{{ $project->language }}</dd>
        <dt class="col-sm-6">Link</dt>
        <dd class="col-sm-6">{{ $project->link }}</dd>
        <dt class="col-sm-6">Data de Criação</dt>
        <dd class="col-sm-6">{{ $project->created_at }}</dd>
        <dt class="col-sm-6">Data de Atualização</dt>
        <dd class="col-sm-6">{{ $project->updated_at }}</dd>
    </dl>

    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar" class="btn btn-danger" /> |
        <a href="{{ route('projects.index') }}">Voltar</a>
    </form>
    {{-- <a href="#" onclick="event.preventDefault(); document.querySelector('#delete_form_{{ $category->id }}').submit()" class="ms-3">Deletar</i></a>
    <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" id="delete_form_{{ $category->id }}">@csrf @method('DELETE')</form> --}}

@endsection
