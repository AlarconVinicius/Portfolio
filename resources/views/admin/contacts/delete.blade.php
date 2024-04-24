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
        <dd class="col-sm-6">{{ $contact->name }}</dd>
        <dt class="col-sm-6">Email</dt>
        <dd class="col-sm-6">{{ $contact->email }}</dd>
        <dt class="col-sm-6">Mensagem</dt>
        <dd class="col-sm-6">{{ $contact->message }}</dd>
    </dl>

    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar" class="btn btn-danger" /> |
        <a href="{{ route('contacts.index') }}">Voltar</a>
    </form>

@endsection
