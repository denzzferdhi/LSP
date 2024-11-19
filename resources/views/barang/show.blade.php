<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Barang</title>
</head>
<body>
    <h2>Detail Barang</h2>
    <p>Nama Barang: <b>{{ $barang->id_barang }}</b></p>
    <p>Harga Barang: <b>{{ $barang->harga_barang }}</b></p>
    <p>Jumlah Barang: <b>{{ $barang->jumlah_barang }}</b></p>
    <a href="/barang">Kembali</a>
</body>
</html>
