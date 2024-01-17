<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1 align="center">Silahkan Register</h1>

    @if(Session::has('success'))
        <div align="center" style="color: green; margin-bottom: 15px;">
            {{ Session::get('success') }}
        </div>
    @endif

    <form align="center" action="{{ route('register') }}" method="post" accept-charset="utf-8">
        @csrf

        <label for="name">Nama :</label>
        <input type="text" name="name" id="name" placeholder="Nama Lengkap" required size="20">
        <br/><br/>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" placeholder="name@gmail.com" required>
        <br/><br/>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
        <br/><br/>

        <input type="submit" name="btn_simpan" value="Register" />
    </form>

    <p align="center" style="margin-top: 15px;">Sudah punya akun? <a href="{{ url('login') }}">Login</a></p>
</body>
</html>
