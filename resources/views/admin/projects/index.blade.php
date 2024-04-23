@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h1>Projetos</h1>

<p>
    <a href="">Adicionar Projeto</a>
</p>
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
                <a href="" >Edit</a> |
                <a href="" >Details</a> |
                <a href="" >Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
