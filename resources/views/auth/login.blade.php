@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 2px solid #FF8985;">
                <div class="card-header text-center" style="background-color: #D97471; color: #ffdbdb; border: 2px solid #FF8985; font-weight: bold; font-size: 1.5em">
                    {{ __('Login') }}
                </div>

                <div class=" card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3" style="color: #AD6966;">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="name@example.com" required
                                autocomplete="email" autofocus>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
                                autocomplete="current-password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check" style="color: #AD6966;">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn1">{{ __('Login') }}</button>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                @if (Route::has('password.request'))
                                <a class=" btn-link btn-link-forgot-password" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
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

.btn-link-forgot-password {
    color: #AD6966;
    text-decoration: none;
}

.btn-link-forgot-password:hover {
    text-decoration: underline;
}
</style>
@endsection
