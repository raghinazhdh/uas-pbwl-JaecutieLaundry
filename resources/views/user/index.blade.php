@extends('layouts.app')

@section('content')
<?php $no = 1 ?>
<h2 style="color: #AD6966; text-shadow: 2px 2px 4px #FF8985;">Data User</h2>

<a href="{{ url('user/create') }}" class="btn1 mb-3 float-end" style="text-decoration: none;">+
 User</a>

<table class="table table-bordered" style="border-color: #FF8985;">
    <tr style="background-color: #D97471; color: #ffdbdb;">
        <th class="text-center">NO</th>
        <th class="text-center">NAMA</th>
        <th class="text-center">EMAIL</th>
        <th class="text-center">ID</th>
        <th class="text-center">ACTION</th>
    </tr>

    @foreach ($rows as $row)
    <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f2f2f2' : '#ffdbdb' }};">
        <td class="text-center">{{ $no++ }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td class="text-center">{{ $row->id }}</td>
        <td class="text-center">
            <div class='norebuttom'>
                <a class="btn btn-warning btn-sm" href="{{ url('user/edit/' . $row->id) }}" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .675rem;">
                    <i class='fa fa-pencil-alt'></i>
                </a>
                <form action="{{ url('user/' . $row->id) }}" method="post" style="display: inline;">
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
