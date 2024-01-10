@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 2px solid #FF8985;">
                <div class="card-header text-center" style="background-color: #D97471; color: #ffdbdb; border: 2px solid #FF8985; font-weight: bold; font-size: 1.5em">
                    {{ __('Register') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3" style="color: #AD6966;">
                            <label for="name" class="form-label">{{ __('Username') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div class="form-text">
                                Username as you want it to appear on the platform.
                            </div>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3" style="color: #AD6966;">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            <div class="form-text">
                                We'll never share your email with anyone else.
                            </div>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3" style="color: #AD6966;">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            <div class="form-text">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not
                                contain spaces, special characters, or emoji.
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3" style="color: #AD6966;">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            <div class="form-text">
                                Please re-enter your password to confirm.
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn1">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn1 {
    background-color: #AD6966;
    border-radius: 7px;
    color: #ffffff;
    padding: 7px;
}

.btn1:hover {
    background-color: #8d524e;
    color: #ffffff;
}
</style>
@endsection
