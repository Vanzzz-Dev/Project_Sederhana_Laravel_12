<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.css') }}">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 350px;">
            <h3 class="text-center mb-3">Login</h3>

            <form action="/buat" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
                <p class="text-center mb-3">Udah Punya akun ? <a href="/login">Kembali</a></p>
            </form>

        </div>
    </div>

</body>

</html>