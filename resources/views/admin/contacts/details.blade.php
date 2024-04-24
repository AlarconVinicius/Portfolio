@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

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
</div>
<div>
    <a href="{{ route('contacts.index') }}">Voltar</a>
</div>

@endsection
