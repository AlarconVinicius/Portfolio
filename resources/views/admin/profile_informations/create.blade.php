@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('profile_informations.create') }}" method="POST">

            @include('admin.profile_informations.partials.form')

            <div class="form-group mt-3">
                <input type="submit" value="Adicionar" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <a href="{{ route('profile_informations.index') }}">Voltar</a>
</div>


@endsection
