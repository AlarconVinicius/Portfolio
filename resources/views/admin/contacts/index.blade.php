@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h1>Mensagens de Contato</h1>

<x-alert/>

<table class="table">
    <thead>
        <tr>
            <th>
                Nome
            </th>
            <th>
                Email
            </th>
            <th>
                Mensagem
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
    @foreach ($contacts as $contact)
        <tr>
            <td>
                {{ $contact->name }}
            </td>
            <td>
                {{ $contact->email }}
            </td>
            <td>
                {{ $contact->message }}
            </td>
            <td>
                {{ $contact->created_at }}
            </td>
            <td>
                {{ $contact->updated_at }}
            </td>
            <td>
                <a href="{{ route('contacts.details', $contact->id) }}">Detalhes</a>
                <a href="{{ route('contacts.delete', $contact->id) }}">Deletar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
