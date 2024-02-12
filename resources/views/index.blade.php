<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>

<body>

    <h1>Data Produk</h1>
    <a href="/create">Tambah Data</a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="20">
        <thead>
            <td>No</td>
            <td>Nama Produk</td>
            <td>Keterangan</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Action</td>
        </thead>
        @foreach ($data as $i => $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->nama_produk }}</td>
                <td>{{ $d->keterangan }}</td>
                <td>{{ $d->harga }}</td>
                <td>{{ $d->jumlah }}</td>
                <td><a href="/edit/{{ $d->id }}">Edit</a> |  <a href="/destroy/{{ $d->id }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
