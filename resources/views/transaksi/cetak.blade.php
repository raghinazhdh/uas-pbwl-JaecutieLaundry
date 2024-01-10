<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            background-color: #D97471;
            color: #ffdbdb;
            text-align: center;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #D97471;
            color: #ffdbdb;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>REPORT TRANSAKSI</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Layanan</th>
            <th>Berat Cucian (kg)</th>
            <th>Total Harga</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Selesai</th>
            <th>Petugas</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ optional($row->pelanggan)->pel_nama }}</td>
            <td>{{ optional($row->layanan)->lay_jenis }}</td>
            <td>{{ $row->trans_berat }}</td>
            <td>{{ 'Rp ' . number_format($row->trans_total, 0, ',', '.') }}</td>
            <td>{{ $row->trans_tgl_masuk }}</td>
            <td>{{ $row->trans_tgl_selesai }}</td>
            <td>{{ optional($row->users)->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
