<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1 align="center">Selamat Datang di PO CAN Travel</h1>
    <h3 align="center">Silahkan Login</h3>

    @if(Session::has('error'))
        <div align="center" style="color: red; margin-bottom: 15px;">
            {{ Session::get('error') }}
        </div>
    @endif

    <form align="center" action="{{ route('login') }}" method="post" accept-charset="utf-8">
        @csrf

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br/><br/>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
        <br/><br/>

        <input type="submit" name="btn_login" value="Login" />
    </form>

    <p align="center" style="margin-top: 15px;">Belum punya akun? <a href="{{ url('register') }}">Registrasi</a> dulu</p>
</body>
</html>
