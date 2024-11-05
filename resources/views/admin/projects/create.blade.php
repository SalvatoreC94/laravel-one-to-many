<!-- resources/views/admin/projects/create.blade.php -->
@extends('layouts.app')

@section('title', 'Crea Nuovo Progetto')

@section('content')
    <div class="container">
        <h1>Crea Nuovo Progetto</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nome del Progetto</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group mt-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="image_url">URL Immagine</label>
                <input type="url" name="image_url" id="image_url" class="form-control">
            </div>
            <button type="submit" class="btn btn-success mt-3">Crea Progetto</button>
        </form>
    </div>
@endsection
