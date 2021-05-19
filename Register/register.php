<?php 
 
require 'koneksi.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('registrasi berhasil!');
              </script>";
    } else {
        echo mysqli_error($koneksi);
    }

}



?>

<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <h1 align='center'>SISTEM INFORMASI HIBAH GAMPONG</h1>
  </head>
  <body>
  <div class="container">
    <form method="post" action="">
    <h2>SIMBAH-G</h2>
      <div class="form-group">
        <input type="text" name="nama" class="form-control item" placeholder="Masukkan Nama Anda">
      </div>
        <div class="form-group">
          <input type="date" name="tanggal"  class="form-control item" placeholder="TEMPAT TANGGAL LAHIR" >
        </div>
        <div class="form-group">
          <input type="number" name="nik"  class="form-control item" placeholder="NIK">
        </div>
        <div class="form-group">
          <select name="jeniskelamin"  class="form-control item" placeholder="JENIS KELAMIN" 
             ><option>****JENIS KELAMIN****</option>
               ><option>LAKI LAKI</option>
                  <option>PEREMPUAN</option>
            </select>
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control item" placeholder="EMAIL">
        </div>
     <div class="form-group">
        <input type="text" name="username"  class="form-control item" placeholder="Masukkan Username Anda" >
     </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control item" placeholder="Masukkan Password Anda">
       </div>
      <div class="form-group">
        <input type="password" name="password2"  class="form-control item" placeholder="Masukkan Ulang Password Anda">
      </div>
      <div class='row'>
          <div class='col d-flex justify-content-center'>
            <a href="login.php" class="btn btn-block btn-danger btn-md mt-3">BATAL</a>
          </div>
          <div class='col d-flex justify-content-center'>
            <input class="btn btn-block btn-success mt-3" type="submit" name="register" value="DAFTAR">
          </div>
      </form>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c79f008dbd.js" crossorigin="anonymous"></script>
  </body>
</html>