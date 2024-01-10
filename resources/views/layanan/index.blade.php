@extends('layouts.app')
@section('content')
<?php $no = 1 ?>
<h2 style="color: #AD6966;text-shadow: 2px 2px 4px #FF8985;">Data Layanan</h2>

<a href="{{ url('layanan/create') }}" class="btn1 mb-3 float-end" style="text-decoration: none;">+ Layanan</a>

<table class="table table-bordered" style="border-color: #FF8985;">
    <tr style="background-color: #D97471; color: #ffdbdb;">
        <th class="text-center">NO</th>
        <th class="text-center">Jenis Layanan</th>
        <th class="text-center">Harga (kg)</th>
        <th class="text-center">Action</th>
    </tr>

    @foreach ($rows as $row)
    <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f2f2f2' : '#ffdbdb' }};">
        <td class="text-center">{{ $no++ }}</td>
        <td>{{ $row->lay_jenis }}</td>
        <td class="text-end">{{ 'Rp ' . number_format($row->lay_harga, 0, ',', '.') }}</td>
        <td class="text-center">
            <div class='norebuttom'>
                <a class="btn btn-warning btn-sm" href="{{ url('layanan/edit/' . $row->lay_id) }}" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .675rem;">
                    <i class='fa fa-pencil-alt'></i>
                </a>
                <form action="{{ url('layanan/' . $row->lay_id) }}" method="post" style="display: inline;">
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
    
</style>
@endsection
