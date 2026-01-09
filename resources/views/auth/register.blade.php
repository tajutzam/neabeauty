@extends('layouts.app2')

@section('content')
<style>
    .auth-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url('https://neabeautytissue.com/wp-content/uploads/2024/08/neabeauty-gallery-image-7.jpg'); /* Path gambar background */
        background-size: cover;
        background-size: cover;
        background-position: center;
    }
    .auth-card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        background-color: rgba(255, 255, 255, 0.9); /* Sedikit transparan untuk terlihat lebih baik dengan background */
        padding: 20px;
    }
    .auth-card-header {
        background-color: palevioletred;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        text-align: center;
        padding: 10px 0;
    }
    .auth-card-body {
        padding: 20px;
    }
    .auth-input {
        margin-bottom: 15px;
    }
    .auth-btn {
        background-color: palevioletred;
        border: none;
        width: 100%;
    }
    .auth-btn:hover {
        background-color: palevioletred;
        b
    }
    .registration-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
    }
</style>
<div class="auth-container">
    <div class="card auth-card">
        <div class="registration-title">{{ __('Regitrasi Akun') }}</div>
        <div class="card-header auth-card-header">{{ __('Registrasi Akun Anda') }}</div>

        <div class="card-body auth-card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3 auth-input">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 auth-input">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 auth-input">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 auth-input">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary auth-btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
