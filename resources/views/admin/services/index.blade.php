@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h1>Serviços</h1>

<p>
    <a href="{{ route('services.create') }}">Adicionar Serviço</a>
</p>

<x-alert/>

<table class="table">
    <thead>
        <tr>
            <th>
                Nome
            </th>
            <th>
                Descrição
            </th>
            <th>
                Ícone
            </th>
            <th>
                Data de Criação
            </th>
            <th>
                Data de Atualização
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($services as $service)
        <tr>
            <td>
                {{ $service->name }}
            </td>
            <td>
                {{ $service->description }}
            </td>
            <td>
                {{ $service->icon }}
            </td>
            <td>
                {{ $service->created_at }}
            </td>
            <td>
                {{ $service->updated_at }}
            </td>
            <td>
                <a href="{{ route('services.edit', $service->id) }}">Editar</a>
                <a href="{{ route('services.details', $service->id) }}">Detalhes</a>
                <a href="{{ route('services.delete', $service->id) }}">Deletar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
