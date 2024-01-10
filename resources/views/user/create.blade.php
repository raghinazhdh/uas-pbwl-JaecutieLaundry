@extends('layouts.app')

@section('content')
<h2 style="color: #AD6966; text-shadow: 2px 2px 4px #FF8985;">Add User</h2>

<form action="{{ url('user') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" style="color: #AD6966;">NAMA</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required
            style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="nameHelpBlock" class="form-text" style="color: #AD6966;">Enter the username.</div>
    </div>
    <div class="mb-3">
        <label for="email" style="color: #AD6966;">EMAIL</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required
            style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="emailHelp" class="form-text" style="color: #AD6966;">We'll never share your email with anyone else.
        </div>
    </div>
    <div class="mb-3">
        <label for="password" style="color: #AD6966;">PASSWORD</label>
        <input type="password" name="password" id="password"
            class="form-control @error('password') is-invalid @enderror" required
            style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div id="passwordHelpBlock" class="form-text" style="color: #AD6966;">Your password must be 5-20 characters long,
            contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
    </div>
    <div class="mb-3">
        <label for="password_confirmation" style="color: #AD6966;">CONFIRM PASSWORD</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required
            style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;">
        <div id="passwordConfirmHelpBlock" class="form-text" style="color: #AD6966;">Please confirm your password.</div>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn">
    </div>
</form>

<style>
    .btn {
        background-color: #AD6966; 
        color: #ffffff;
        border-radius: 7px;
        padding: 7px;
    }

    .btn:hover {
        background-color: #8d524e;
        color: #ffffff;
    }

    label {
        color: #AD6966;
    }

    .form-control {
        border: 1px solid #FF8985;
        border-radius: 5px;
        padding: 8px;
    }
</style>
@endsection
