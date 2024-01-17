<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pemesanan Bus</title>
</head>
<body>
    <h1 align="center">Formulir Pemesanan Bus</h1>

    @if(Session::has('success'))
        <div align="center" style="color: green; margin-bottom: 15px;">
            {{ Session::get('success') }}
        </div>
    @endif

    <form align="center" action="{{ url('bus/'.$bus->id.'/book') }}" method="post" accept-charset="utf-8">
        @csrf

        <input type="hidden" name="id_bus" value="{{ $bus->id }}">
        
        <!-- Jika Anda menggunakan autentikasi pengguna, Anda dapat mengakses ID pengguna saat ini menggunakan auth()->user()->id -->

        <label for="asal">Asal</label>
        <input type="text" name="asal" id="asal" placeholder="Asal" required>
        <br/><br/>

        <label for="tujuan">Tujuan</label>
        <input type="text" name="tujuan" id="tujuan" placeholder="Tujuan" required>
        <br/><br/>

        <label for="nama_penumpang">Nama Penumpang</label>
        <input type="text" name="nama_penumpang" id="nama_penumpang" placeholder="Nama Lengkap" required>
        <br/><br/>

        <label for="email_penumpang">Email Penumpang</label>
        <input type="email" name="email_penumpang" id="email_penumpang" placeholder="email@gmail.com" required>
        <br/><br/>

        <label for="kursi">Nomor Kursi</label>
        <input type="text" name="kursi" id="kursi" placeholder="Contoh: A1" required>
        <br/><br/>

        <input type="submit" name="btn_book" value="Pesan">
    </form>
</body>
</html>
