<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Transaksi</title>
</head>
<body>
    <h2>Riwayat Transaksi</h2>

    <a href="/barang">Kembali</a>

    @forelse ($transaksi as $dt)
    <div style="width: 50%; margin: 0 auto; text-align: center; border: 2px solid black; margin-bottom: 20px;">
        <form method="POST" action="{{ route('transaksi.bayar') }}">
            @csrf
            <h1>NOTA</h1>
            <h2>{{ $dt->keterangan }}</h2>
            <p>Barang Dibeli: <b>{{ $dt->nama_barang }}</b></p>
            <p>Harga Satuan: <b>{{ $dt->harga_barang }}</b></p>
            <p>Kuantitas Beli: <b>{{ $dt->jumlah_beli }}</b></p>
            <p>Harga Total: <b>{{ $dt->jumlah_bayar }}</b></p>
            @if ($dt->keterangan == 'BELUM LUNAS')
                <input type="hidden" name="jumlah_bayar" value="{{ $dt->jumlah_bayar }}">
                <input type="hidden" name="id_transaksi" value="{{ $dt->id_transaksi }}">
                <p>Pembayaran <br>
                    <input type="number" name="bayar"> <button type="submit">Bayar</button>
                </p>
            @else
                <p>Lunas Tanggal: <b>{{ $dt->tgl_transaksi }}</b></p>
                <p>Kembalian: <b>{{ $dt->kembalian }}</b></p>
            @endif
        </form>
    </div>
    @empty
        <p>Data barang masih kosong</p>
    @endforelse
</body>
</html>
