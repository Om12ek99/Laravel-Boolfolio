@extends('layouts.admin')

@section('content')
    <h1>Progetti</h1>

    <a href="{{ route('admin.project.create') }}" class="btn btn-primary mb-3">Crea nuovo progetto</a>

    <ul>
        @foreach ($projects as $curProject)

            <li>{{ $curProject->title }}</li>
        @endforeach
    </ul>
@endsection