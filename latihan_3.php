<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Kelulusan</title>
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

<div class = "container">
    <h1>Perhitungan Kelulusan</h1>
<form action="" method="POST" name="penilaian">
    <div class="form-group mt-5">
    <label for="exampleInputPassword1">Nama</label>
    <input class="form-control" type="text" name="nama" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kelas</label>
    <input class="form-control" type="text" name="kelas" placeholder="Masukan Kelas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nilai Produktif</label>
    <input class="form-control" type="number" name="produktif" placeholder="Masukan Nilai Produktif" min="1" max="100">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nilai Normatif</label>
    <input class="form-control" type="number" name="normatif" placeholder="Masukan Nilai Normatif" min="1" max="100">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nilai Mulok</label>
    <input class="form-control" type="number" name="mulok" placeholder="Masukan Nilai Mulok" min="1" max="100">
  </div>
  
  <button type="submit" name="proses" class="btn btn-primary">Proses</button>
  <hr>
  </form>

<?php

if (isset($_POST["proses"])) {
    $produktif = $_POST["produktif"];
    $normatif = $_POST["normatif"];
    $mulok = $_POST["mulok"]; 
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];


    
    if ($produktif >= 90) {
        $PGrade = "A";
    } else if ($produktif >= 80) {
        $PGrade = "B";
    } else if ($produktif >= 70) {
        $PGrade = "C";
    } else if ($produktif >= 60) {
        $PGrade = "D";
    } else if ($produktif < 60) {
        $PGrade = "E";
    } 
    
    if ($normatif >= 90) {
        $NGrade = "A";
    } else if ($normatif >= 80) {
        $NGrade = "B";
    } else if ($normatif >= 70) {
        $NGrade = "C";
    } else if ($normatif >= 60) {
        $NGrade = "D";
    } else if ($normatif < 60) {
        $NGrade = "E";
    } 
    if ($mulok >= 90) {
        $MGrade = "A";
    } else if ($mulok >= 80) {
        $MGrade = "B";
    } else if ($mulok >= 70) {
        $MGrade = "C";
    } else if ($mulok >= 60) {
        $MGrade = "D";
    } else if ($mulok < 60) {
        $MGrade = "E";
    }
    
 if ($produktif > 70) {
    $Pketerangan = "Lulus";
 } else {
    $Pketerangan = "Tidak Lulus";
 }
 if ($normatif > 70) {
    $Nketerangan = "Lulus";
 } else {
    $Nketerangan = "Tidak Lulus";
 }
 if ($mulok > 70) {
    $Mketerangan = "Lulus";
 } else {
    $Mketerangan = "Tidak Lulus";
 }
 
 $average = ($produktif + $normatif + $mulok)/3;

 if ($average >= 75) {
    $hasil = "LULUS";
 } else { 
    $hasil = "GAGAL";
 }

echo "
 
<h5>Nama : $nama</h5>
<h5>Kelas : $kelas</h5>

<table class='table table-bordered'>
 <thead>
   <tr>
     <th scope='col'>No</th>
     <th scope='col'>Mapel</th>
     <th scope='col'>Nilai</th>
     <th scope='col'>Grade</th>
     <th scope='col'>Keterangan</th>
     
   </tr>
 </thead>
 <tbody>
   <tr>
     <th scope='row'>1</th>
     <td>Produktif</td>
     <td>$produktif</td>
     <td>$PGrade</td>
     <td>$Pketerangan</td>
   </tr>
   <tr>
     <th scope='row'>2</th>
     <td>Normatif</td>
     <td>$normatif</td>
     <td>$NGrade</td>
     <td>$Nketerangan</td>
   </tr>
   <tr>
     <th scope='row'>3</th>
     <td>Mulok</td>
     <td>$mulok</td>
     <td>$MGrade</td>
     <td>$Mketerangan</td>
   </tr>
 </tbody>
</table>
";


echo "
<div class = 'row'>
<div class = 'col-md-9'>
<h5>Nilai Rata Rata : </h5>
</div>
<div class = 'col-md-3'>
<h5>$average</h5>
<h5>$hasil</h5>
</div>
</div>
";
}
 ?>
 


 </div>
</body>
  </html>
