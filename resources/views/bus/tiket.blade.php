<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiket yang Sudah Dipesan</title>
</head>
<body>
    <h1 align="center">Tiket yang Sudah Dipesan</h1>

    @if($tikets !== null && count($tikets) > 0)
        <table border="1" align="center">
            <thead>
                <tr>
                    <th>Asal</th>
                    <th>Tujuan</th>
                    <th>Nama Penumpang</th>
                    <th>Nomor Kursi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tikets as $tiket)
                    <tr>
                        <td>{{ $tiket->asal }}</td>
                        <td>{{ $tiket->tujuan }}</td>
                        <td>{{ $tiket->nama_penumpang }}</td>
                        <td>{{ $tiket->kursi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p align="center">Anda belum memesan tiket.</p>
    @endif
    <br/><a href="{{ url('home') }}">Kembali</a>
</body>
</html>
