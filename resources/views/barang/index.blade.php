<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
    @if (session('error'))
        {{  session('error') }}
    @endif

    @if (session('success'))
        {{  session('success') }}
    @endif
    <hr>
    <a href="/barang/create">Tambah Data</a> |
    <a href="/transaksi/index">Riwayat Transaksi</a>

    <table style="width: 100%;" border="1">
        <thead>
            <th>No</th>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($barang as $dt)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $dt->id_barang }}</td>
                <td>{{ $dt->nama_barang }}</td>
                <td>{{ $dt->harga_barang }}</td>
                <td>{{ $dt->jumlah_barang }}</td>
                <td>
                    <form onsubmit="return confirm('Hapus?');" action="{{ route('barang.destroy', $dt->id_barang ) }}" method="POST">
                        <a href="{{ route('transaksi.beli', $dt->id_barang) }}">Beli</a> |
                        <a href="{{ route('barang.show', $dt->id_barang) }}">Detail</a> |
                        <a href="{{ route('barang.edit', $dt->id_barang) }}">Edit</a> |
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <p>Data barang masih kosong</p>
            @endforelse
        </tbody>
    </table>
</body>
</html>
