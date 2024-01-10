@extends('layouts.app')

@section('content')
    <h2 style="color: #AD6966; text-shadow: 2px 2px 4px #FF8985;">Edit Layanan</h2>

    <form action="{{ url('layanan/' . $row->lay_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="lay_jenis">Jenis Layanan</label>
            <input type="text" name="lay_jenis" id="lay_jenis" class="form-control" value="{{ $row->lay_jenis }}">
        </div>
        <div class="mb-3">
            <label for="lay_harga">Harga (Kg) </label>
            <input type="text" name="lay_harga" id="lay_harga" class="form-control" value="{{ $row->lay_harga }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn ">UPDATE</button>
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
