<!-- resources/views/admin/projects/index.blade.php -->
@extends('layouts.app')

@section('title', 'Portfolio Progetti')

@section('content')
    <div class="container">
        <h1>Progetti del Portfolio</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Crea Nuovo Progetto</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info">Visualizza</a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
