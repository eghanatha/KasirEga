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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">KASIR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="/pelanggan">Pelanggan</a>
              <a class="nav-link" href="/penjualan">Penjualan</a>
              <a class="nav-link" href="#">Detail Penjualan</a>
              <a class="nav-link" href="#">Produk</a>
            </div>
            <div class="float-right">
                <a href="/logout" class="nav-link">Log Out</a>
            </div>
          </div>
        </div>
    </nav>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>