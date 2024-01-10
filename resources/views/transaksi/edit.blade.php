@extends('layouts.app')

@section('content')
    <h2 style="color: #AD6966; text-shadow: 2px 2px 4px #FF8985;">Edit Transaksi</h2>

    <form action="{{ url('transaksi/' . $row->trans_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="pel_id">Nama Pelanggan</label>
            <select name="pel_id" id="pel_id" class="form-control" required>
                @foreach($getpel as $pel)
                    <option value="{{ $pel->pel_id }}" {{ $pel->pel_id == $row->pel_id ? 'selected' : '' }}>
                        {{ $pel->pel_nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="lay_id">Jenis Layanan</label>
            <select name="lay_id" id="lay_id" class="form-control" required>
                @foreach($getlay as $lay)
                    <option value="{{ $lay->lay_id }}" {{ $lay->lay_id == $row->lay_id ? 'selected' : '' }}>
                        {{ $lay->lay_jenis }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="trans_berat">Berat Cucian (kg)</label>
            <input type="text" name="trans_berat" id="trans_berat" class="form-control" value="{{ $row->trans_berat }}" required>
        </div>
        <div class="mb-3">
            <label for="trans_tgl_masuk">Tanggal Masuk</label>
            <input type="date" name="trans_tgl_masuk" id="trans_tgl_masuk" class="form-control" value="{{ $row->trans_tgl_masuk }}" required>
        </div>
        <div class="mb-3">
            <label for="trans_tgl_selesai">Tanggal Selesai</label>
            <input type="date" name="trans_tgl_selesai" id="trans_tgl_selesai" class="form-control" value="{{ $row->trans_tgl_masuk }}" required>
        </div>
        <div class="mb-3">
            <label for="id">PETUGAS</label>
            <select name="id" id="id" class="form-control" disabled>
                <option value="{{ $currentUser->id }}" selected>{{ $currentUser->name }}</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn">
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
