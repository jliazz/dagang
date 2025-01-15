<?php
include ("koneksi.php");
$query = mysqli_query($koneksi,"select * from tambah_produk where id_produk=02");

$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        section{
            display:flex;
            justify-content:center;
        }
        .card{
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
    <section>
    <div class="card" style="width: 18rem;">
  <img src="foto/<?= $data['poto'] ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $data["id_produk"] ?></h5>
    <p class="card-text"><?= $data["nama_produk"] ?></p>
    <p class="card-text"><?= $data["harga"] ?></p>
    <p class="card-text"><?= $data["poto"] ?></p>

    <from action="proses_keranjang.php" method="post">
    <div class="btn-group" role="group" aria-label="Basic example">
  <span><button type="button" class="btn btn-primary">beli sekarang</button>
  <button type="button" class="btn btn-primary">keranjang</button></span>
</div>
  </div>
</div>
    

    
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>