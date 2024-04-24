@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h1>Projetos</h1>

<p>
    <a href="{{ route('projects.create') }}">Adicionar Projeto</a>
</p>

<x-alert/>

<table class="table">
    <thead>
        <tr>
            <th>
                Título
            </th>
            <th>
                Descrição
            </th>
            <th>
                Linguagem
            </th>
            <th>
                Link
            </th>
            <th>
                Data Criação
            </th>
            <th>
                Data Atualização
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project)
        <tr>
            <td>
                {{ $project->title }}
            </td>
            <td>
                {{ $project->description }}
            </td>
            <td>
                {{ $project->language }}
            </td>
            <td>
                {{ $project->link }}
            </td>
            <td>
                {{ $project->created_at }}
            </td>
            <td>
                {{ $project->updated_at }}
            </td>
            <td>
                {{-- <a href="{{ route('projects.edit', $project) }}">Edit</a> | --}}
                <a href="{{ route('projects.edit', $project->id) }}">Editar</a>
                <a href="{{ route('projects.details', $project->id) }}">Detalhes</a>
                <a href="{{ route('projects.delete', $project->id) }}">Deletar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
{{-- @section("script")
@endsection --}}



