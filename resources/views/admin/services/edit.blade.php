@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('services.edit', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('admin.services.partials.form')

            <div class="form-group mt-3">
                <input type="submit" value="Salvar" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <a href="{{ route('services.index') }}">Voltar</a>
</div>

@endsection
