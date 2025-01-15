<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

   <form action="proses_tambah" method="post" enctype="multipart/form-data">  
    <div>
        id_produk:
        <input type="text" name="nama_produk" />
    </div>
    <div>
        nama_produk:
        <input type="text" name="deskripsi_produk" />
    </div>
    <div>
        harga:
        <input type="number" name="harga" />
    </div>
    <div>
        poto:
        <input type="file" name="foto" />
    </div>

    <input type="submit" name="simpan" value="simpan">
   </form>
</body>
</html>