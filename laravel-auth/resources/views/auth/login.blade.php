@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">
                                Indirizzo Email
                            </label>
                            <input type="email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password">
                                Password
                            </label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mt-3">
                            <input id="remember_me" type="checkbox" name="remember" class="form-check-input"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember_me">
                                Ricordami
                            </label>
                        </div>

                        <div class="mt-4">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-primary">
                                    Hai dimenticato la password?
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-3">
                            Accedi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
