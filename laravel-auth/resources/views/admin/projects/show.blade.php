<!-- resources/views/admin/projects/show.blade.php -->
@extends('layouts.app')

@section('title', 'Dettagli Progetto')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        @if ($project->image_url)
            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="img-fluid">
        @endif
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-3">Torna alla Lista</a>
    </div>
@endsection
