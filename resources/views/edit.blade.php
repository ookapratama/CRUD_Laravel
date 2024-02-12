<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Data</title>
</head>
<body>

  <h1>Edit Data</h1>
  <form action="/update" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $data->id }}">
    <label for="">Nama Produk</label>
    <input type="text" name="nama_produk" value="{{ $data->nama_produk }}">
    <br>
    <label for="">Keterangan</label>
    <input type="text" name="keterangan" value="{{ $data->keterangan }}">
    <br>
    <label for="">Harga</label>
    <input type="number" name="harga" value="{{ $data->harga }}">
    <br>
    <label for="">Jumlah</label>
    <input type="number" name="jumlah" value="{{ $data->jumlah }}">
    <button type="submit">Update</button>
  </form>
</body>
</html>