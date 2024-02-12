<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TAmbah Data</title>
</head>
<body>

  <h1>Tambah Data</h1>
  <form action="/store" method="post">
    @csrf
    <label for="">Nama Produk</label>
    <input type="text" name="nama_produk">
    <br>
    <label for="">Keterangan</label>
    <input type="text" name="keterangan">
    <br>
    <label for="">Harga</label>
    <input type="number" name="harga">
    <br>
    <label for="">Jumlah</label>
    <input type="number" name="jumlah">
    <button type="submit">Store</button>
  </form>
</body>
</html>