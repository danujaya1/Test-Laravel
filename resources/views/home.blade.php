<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<p>Welcome, {{ Auth::user()->name }}</p>
<a href="{{ route('bus.tiket') }}">Tiket yang Sudah Dipesan</a>
<form action="{{ route('home') }}" method="get" align="center">
    <input type="text" name="search" placeholder="Cari nama bus..." value="{{ isset($cari) ? $cari : '' }}">
    <button type="submit">Cari</button>
</form>
<h1 align="center">Daftar Bus yang Dapat Dipesan</h1>

    <table border="1" align="center">
        <thead>
            <tr>
                <th>Nama Bus</th>
                <th>Nomor Bus</th>
                <th>Jenis Bus</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bus as $bus)
                <tr>
                    <td>{{ $bus->nama_bus }}</td>
                    <td>{{ $bus->nomor_bus }}</td>
                    <td>{{ $bus->jenis_bus }}</td>
                    <td>
                        <a href="{{ route('bus.book', $bus->id) }}">Pesan</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada hasil pencarian.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <br><br>
    <form action="{{ route('logout') }}" method="POST" role="search" align="center">
        @csrf
        @method('DELETE')
        <button type="submit">Logout</button>
    </form>
</body>
</html>