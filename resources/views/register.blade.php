<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <title>Document</title>

    <style>
        .card-custom{
            width: 500px;
            height: 500px;
            padding: 30px;
            border-radius: 39px;
            background: #ececec;
            box-shadow:  30px 30px 60px #cecece,
                        -30px -30px 60px #ffffff;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card-custom">
            <h5 class="text-center">Register</h5>
            <form action="/proses-register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="">password</label>
            
                    <input class="form-control" type="password" name="password">
                </div>
                <select name="hak_akses" id="" class="form-select form-control mb-3">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
                <button class="btn btn-primary w-100">submit</button>
                <a href="/login">
                    <button type="button" class="btn btn-secondary w-100 mt-2">Login</button>
                </a>
            </form>
        </div>
    </div>



    
</body>
</html>