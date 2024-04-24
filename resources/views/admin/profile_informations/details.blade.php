@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

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
</div>
<div>
    <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
    <a href="{{ route('projects.index') }}">Voltar</a>
</div>


@endsection
