<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Kalkulator Harga</title>
  </head>
  <body>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

      <div class="container">
      <h1>Toko Wayang Kami</h1>
      <small> Program Aplikasi sederhana untuk menghitung penjualan barang Toko Wayang Kami

      <form action="" method="POST" name="penjualan">
  <div class="form-group pt-3">
    <label for="exampleInputBarang">Nama Barang</label>
    <input class="form-control" name="nama_barang" placeholder="Masukan Nama Barang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Barang</label>
    <input class="form-control"  type="number" name="har_barang" placeholder="Masukan Harga Barang" min="1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Barang</label>
    <input class="form-control" type="number" name="jml_barang" placeholder="Masukan Jumlah Barang" min="1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diskon</label>
    <input class="form-control" type="number" name="diskon" placeholder="Masukan Persentase Diskon" min="0" max="100">
  </div>
  <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
  <hr>
 
   
    
  </div>
  
</form>
</div>
</body>
</html>
 
<?php
 if (isset($_POST['hitung'])) {
$nama = $_POST['nama_barang'];
$harga = $_POST['har_barang'];
$jumlah = $_POST['jml_barang'];
$diskon = $_POST['diskon'];
} 
// $diskon = 50;
$total = $harga * $jumlah;
$Hdiskon = $diskon/100 * $total;
$akhir = $total- $Hdiskon;
 echo "
   <div class='container'>
  <h3>Jumlah yang harus dibayar</h3>
  <h5>Nama barang = $nama<br></h5>
  <h5>Harga Barang = Rp". number_format($harga) ."<br></h5>
  <h5>Jumlah Barang = $jumlah<br></h5>
  <h5>Total = Rp". number_format($total)."<br></h5>
  <h5>Diskon = $diskon%<br></h5>
  <h3>Total Setelah Diskon adalah Rp". number_format($akhir) ."<br></h3>
  </div>
";
 
?>
















 