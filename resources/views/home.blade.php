@extends('layouts.app')

@section('content')
<style>
    .custom-card-header {
        background-color: #ff9797;
        border: 2px solid #fa7d79;
    }
    .btn {
        background-color: #AD6966;
        border-radius: 7px;
        color: #ffffff;
        padding: 7px;
    }
    .btn:hover {
    background-color: #8d524e;
    color: #ffffff;
    }
</style>

<div class="container" style="margin-bottom: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
            <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Profile Jaecutie Laundry') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="profile-section">

                    <h5 style="color: #AD6966;">Laundry Services</h5>
                    <p style="color: #AD6966;">Our laundry service is committed to providing top-notch care for your clothes. We understand the importance of clean and fresh attire in your daily life. Here's what sets our laundry services apart:</p>

                    <h5 style="color: #AD6966;">Services Offered:</h5>
                        <ul style="color: #AD6966;">
                            <li>Washing and folding</li>
                            <li>Dry cleaning</li>
                            <li>Ironing and pressing</li>
                            <li>Specialized stain removal</li>
                            <!-- Add more services as needed -->
                        </ul>

                        <h5 style="color: #AD6966;">Why Choose Us?</h5>
                        <ul style="color: #AD6966;">
                            <li>High-quality cleaning processes</li>
                            <li>Quick and efficient service</li>
                            <li>Competitive pricing</li>
                            <li>Environmentally friendly practices</li>
                            <!-- Add more reasons as needed -->
                        </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Data Layanan') }}</div>
                <div class="card-body">
                    <p class="card-text" style="color: #AD6966;">{{ __('Total Data: ') . \App\Models\Layanan::count() }}</p>
                    <a href="{{ url('/layanan') }}" class="btn ">{{ __('View Layanan') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Data Pelanggan') }}</div>
                <div class="card-body">
                    <p class="card-text" style="color: #AD6966;">{{ __('Total Data: ') . \App\Models\Pelanggan::count() }}</p>
                    <a href="{{ url('/pelanggan') }}" class="btn ">{{ __('View Pelanggan') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Data Transaksi') }}</div>
                <div class="card-body">
                    <p class="card-text" style="color: #AD6966;">{{ __('Total Data: ') . \App\Models\Transaksi::count() }}</p>
                    <a href="{{ url('/transaksi') }}" class="btn ">{{ __('View Transaksi') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection