<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Barang</title>
</head>
<body>
    <h2>Edit Barang</h2>
    @if ($errors->all())
        <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
        </ul>
    @endif
    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}"><br>
        <label>Harga Barang</label>
        <input type="number" name="harga_barang" value="{{ old('harga_barang', $barang->harga_barang) }}"><br>
        <label>Jumlah Barang</label>
        <input type="text" name="jumlah_barang" value="{{ old('jumlah_barang', $barang->jumlah_barang) }}"><br>
        <button type="submit">Update Data</button>
        <a href="/barang">Kembali</a>
    </form>
</body>
</html>
