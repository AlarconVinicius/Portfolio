@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('profile_informations.edit', $profileInformation->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('admin.profile_informations.partials.form')

            <div class="form-group mt-3">
                <input type="submit" value="Salvar" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <a href="{{ route('profile_informations.index') }}">Voltar</a>
</div>

@endsection
