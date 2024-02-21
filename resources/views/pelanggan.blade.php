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
                    <th>Pelanggan ID</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $key => $item)
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->PelangganID }}</td>
                    <td>{{ $item->NamaPelanggan }}</td>
                    <td>{{ $item->Alamat }}</td>
                    <td>{{ $item->NomorTelepon }}</td>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>