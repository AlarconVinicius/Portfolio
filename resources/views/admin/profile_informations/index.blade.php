@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h1>Informações de Perfil</h1>
@if(!isset($profileInformation))
<p>
    <a href="{{ route('profile_informations.create') }}">Adicionar Informações de Perfil</a>
</p>
@endif

<x-alert/>

<table class="table">
    <thead>
        <tr>
            <th>
                Sobre
            </th>
            <th>
                Especialidade
            </th>
            <th>
                Contate-me
            </th>
            <th>
                Nome
            </th>
            <th>
                Endereço
            </th>
            <th>
                E-mail
            </th>
            <th>
                Link do Currículo
            </th>
            <th>
                Link do LinkedIn
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
        @if(isset($profileInformation))
        <tr>
            <td>
                {{ $profileInformation->about }}
            </td>
            <td>
                {{ $profileInformation->specialty }}
            </td>
            <td>
                {{ $profileInformation->contact_me }}
            </td>
            <td>
                {{ $profileInformation->name }}
            </td>
            <td>
                {{ $profileInformation->address }}
            </td>
            <td>
                {{ $profileInformation->email }}
            </td>
            <td>
                {{ $profileInformation->resume_link }}
            </td>
            <td>
                {{ $profileInformation->linkedin_link }}
            </td>
            <td>
                {{ $profileInformation->created_at }}
            </td>
            <td>
                {{ $profileInformation->updated_at }}
            </td>
            <td>
                <a href="{{ route('profile_informations.edit', $profileInformation->id) }}">Editar</a>
                <a href="{{ route('profile_informations.details', $profileInformation->id) }}">Detalhes</a>
            </td>
        </tr>
        @endif
    </tbody>
</table>

@endsection
