@extends('layouts.admin')

@section('content')
    <h1>Progetti</h1>

    <a href="{{ route('admin.project.create') }}" class="btn btn-primary mb-3">Crea nuovo progetto</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $curProject)
                <tr>
                    <td>{{ $curProject->id }}</td>
                    <td>{{ $curProject->title }}</td>
                    <td>{{ $curProject->slug }}</td>
                    <td>

                    <!-- chiedi ai tutor perche mi prende newProject maiuscolo -->
                        <a href="{{ route('admin.project.show',['NewProject'=>$curProject->slug])}}" class="btn btn-info">Mostra</a>
                        <form action="{{ route('admin.project.destroy', $curProject->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
