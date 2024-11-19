<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<body>
    <h2>Tambah Barang</h2>
    @if ($errors->all())
        <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
        </ul>
    @endif
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <label>Nama Barang</label>
        <input type="text" name="nama_barang"><br>
        <label>Harga Barang</label>
        <input type="number" name="harga_barang"><br>
        <label>Jumlah Barang</label>
        <input type="text" name="jumlah_barang"><br>
        <button type="submit">Simpan Data</button>
        <a href="/barang">Kembali</a>
    </form>
</body>
</html>
