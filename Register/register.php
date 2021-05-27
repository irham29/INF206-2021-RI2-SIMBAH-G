<?php

require 'cekregis.php';

if( isset($_POST["submit"]) ) {

    if( registrasi($_POST) > 0 ) {
        // echo "<script>
        //         alert('registrasi berhasil!');
        //       </script>";
        header("Location: login.php");
    } else {
        echo mysqli_error($conn);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    
    <!-- My Css -->
    <link rel="stylesheet" href="register.css">

    <!-- Font Montserrat-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <title>SIMBAH-G | Sistem Informasi Hibah Gampong</title>
    

    <!-- Judul -->
    <h1 style="color: white; font-family: montserrat; font-weight: bolder;">SISTEM INFORMASI HIBAH GAMPONG</h1>
    
  </head>
  <!-- Form Register -->
  <body>
    <div class="registration-form">
      <form action="" method="POST">
        <div class="form-head">
          <h3 style="font-weight: bolder;">SIMBAH-G</h3>
        </div>
        <div class="form-group">
          <input type="text" class="form-control item" name="nama" id="nama" placeholder="NAMA" required>
        </div>
        <div class="form-group">
          <input type="date" class="form-control item" name="ttl" id="ttl" required>
        </div>
        <div class="form-group">
          <input type="number" class="form-control item" name="nik" id="nik" placeholder="NIK" required>
        </div>
        <div class="form-group">
          <select class="form-select" name="jkelamin" id="jkelamin" required >
            <option value="" selected="selected">JENIS KELAMIN</option>
            <option value="1">LAKI-LAKI</option>
            <option value="2">PEREMPUAN</option>
          </select>
        </div>
        <div class="form-group">
          <input type="email" class="form-control item" name="email" id="email" " placeholder="EMAIL" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control item" name="password" id="password" placeholder="PASSWORD" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control item" name="password2" id="password2" placeholder="KONFIRMASI PASSWORD" required>
        </div>
        <div class='row'>
          <div class='col d-flex justify-content-center'>
            <a href="login.php" class="btn btn-block btn-danger btn-md mt-3">BATAL</a>
          </div>
          <div class='col d-flex justify-content-center'>
            <button class="btn btn-block btn-success mt-3" name="submit">DAFTAR</button>
          </div>
        </div>
      </form>
    </div>
  
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  </body>
</html>