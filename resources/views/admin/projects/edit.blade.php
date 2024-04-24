@extends('layouts.admin')

@section('title', $page_section_title)
@section('content')

<h3>{{ $page_section_title }}</h3>

<hr />
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('projects.edit', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('admin.projects.partials.form')

            <div class="form-group mt-3">
                <input type="submit" value="Save" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <a href="{{ route('projects.index') }}">Voltar</a>
</div>

@endsection
