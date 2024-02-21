<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Penjualan ID</th>
                    <th>Tanggal Penjualan</th>
                    <th>Total Harga</th>
                    <th>pelanggan ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $key => $item)
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->PenjualanID }}</td>
                    <td>{{ $item->TanggalPenjualan }}</td>
                    <td>{{ $item->TotalHarga }}</td>
                    <td>{{ $item->PelangganID }}</td>
                @endforeach
            </tbody> 
    </div>
</body>
</html>