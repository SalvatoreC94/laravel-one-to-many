<!-- resources/views/admin/projects/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Modifica Progetto')

@section('content')
    <div class="container">
        <h1>Modifica Progetto</h1>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Nome del Progetto</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
            </div>
            <div class="form-group mt-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
            </div>
            <div class="form-group mt-3">
                <label for="image_url">URL Immagine</label>
                <input type="url" name="image_url" id="image_url" class="form-control"
                    value="{{ $project->image_url }}">
            </div>
            <button type="submit" class="btn btn-warning mt-3">Aggiorna Progetto</button>
        </form>
    </div>
@endsection
