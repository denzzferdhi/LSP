<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beli Barang</title>
</head>
<body>
    @if ($errors->all())
        <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
        </ul>
    @endif
    <form action="{{ route('transaksi.proses') }}" method="POST">
        @csrf
        <h2>Beli Barang</h2>
        <p>Barang yang dibeli:<br> <b>{{ $barang->id_barang }}</b></p>
        <input type="hidden" name="beli_id" value="{{ $barang->id_barang }}">
        <p>Harga Satuan:<br> <b>{{ $barang->harga_barang }}</b></p>
        <input type="hidden" name="beli_harga" value="{{ $barang->harga_barang }}">
        <p>Stok tersedia:<br> <b>{{ $barang->jumlah_barang }}</b></p>
        <input type="hidden" name="beli_stok" value="{{ $barang->jumlah_barang }}">
        <p>Kuantitas beli:<br>
            <input type="text" name="beli_kuantitas">
        </p>
        <button type="submit">Pesan</button>
        <a href="/barang">Kembali</a>
    </form>
</body>
</html>
