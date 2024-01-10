@extends('layouts.app')

@section('content')
<h2 style="color: #AD6966; text-shadow: 2px 2px 4px #FF8985;">Data Transaksi</h2>

<a href="{{ url('transaksi/create') }}" class="btn1 mb-3 float-end" style="text-decoration: none;">+ transaksi</a>

<a class="btn1 mb-3 float-end mr-2" href="{{ url('downloadpdf/' . $rows->first()->trans_id) }}" target="_blank" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .675rem; text-decoration: none; margin-right: 10px;">
    <i class='fa fa-print'></i> Print
</a>


<table class="table table-bordered" style="border-color: #FF8985;">
    <thead>
        <tr style="background-color: #D97471; color: #ffdbdb;">
            <th class="text-center">No</th>
            <th class="text-center">Pelanggan</th>
            <th class="text-center">Layanan</th>
            <th class="text-center">Berat Cucian (kg)</th>
            <th class="text-center">Total Harga</th>
            <th class="text-center">Tanggal Masuk</th>
            <th class="text-center">Tanggal Selesai</th>
            <th class="text-center">Petugas</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($rows as $row)
        <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f2f2f2' : '#ffdbdb' }};">
            <td class="text-center">{{ $no++ }}</td>
            <td>{{ optional($row->pelanggan)->pel_nama }}</td>
            <td>{{ optional($row->layanan)->lay_jenis }}</td>
            <td class="text-center">{{ $row->trans_berat }}</td>
            <td class="text-end">{{ 'Rp ' . number_format($row->trans_total, 0, ',', '.') }}</td>
            <td class="text-center">{{ $row->trans_tgl_masuk }}</td>
            <td class="text-center">{{ $row->trans_tgl_selesai }}</td>
            <td class="text-center">{{ optional($row->users)->name }}</td>
            <td class="text-center">
                <div class='norebuttom'>
                    <a class="btn btn-warning btn-sm" href="{{ url('transaksi/edit/' . $row->trans_id) }}" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .675rem;">
                        <i class='fa fa-pencil-alt'></i>
                    </a>
                    <form action="{{ url('transaksi/' . $row->trans_id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .675rem;"
                            onclick="return confirm('Are you sure you want to delete this item?')">
                            <i class='fa fa-trash-alt'></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

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

    .btn {
        padding: 8px; /* Adjust the padding as needed */
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
    .mb-3 {
            margin-bottom: 15px;
        }

        /* Add spacing to table rows */
        tbody tr {
            margin-bottom: 10px;
        }
</style>
@endsection
