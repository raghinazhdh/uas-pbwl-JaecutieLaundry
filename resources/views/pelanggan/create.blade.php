@extends('layouts.app')

@section('content')
    <h2 style="color: #AD6966; text-shadow: 2px 2px 4px #FF8985;">Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="pel_nama" style="color: #AD6966;">Nama Pelanggan</label>
            <input type="text" name="pel_nama" id="pel_nama" class="form-control" style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;" required>
        </div>
        <div class="mb-3">
            <label for="pel_alamat" style="color: #AD6966;">Alamat Pelanggan</label>
            <input type="text" name="pel_alamat" id="pel_alamat" class="form-control" style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;" required>
        </div>
        <div class="mb-3">
            <label for="pel_hp" style="color: #AD6966;">No HP Pelanggan</label>
            <input type="text" name="pel_hp" id="pel_hp" class="form-control" style="border: 1px solid #FF8985; border-radius: 5px; padding: 8px;" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn">SAVE</button>
        </div>
    </form>

    <style>
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
