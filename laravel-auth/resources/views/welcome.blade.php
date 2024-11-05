<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Benvenuto')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-primary">
                        Welcome!
                    </h1>
                    <br>
                    La welcome page è una pagina pubblica (NON protetta).
                    <br>
                    <a href="{{ route('login') }}">Login</a> o <a href="{{ route('register') }}">Registrati</a> per accedere.
                </div>
            </div>
        </div>
    </div>
@endsection
