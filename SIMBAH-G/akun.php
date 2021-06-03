<?php
session_start();

//mehubungkan php dengan database
include 'config.php';

//cek sudah login apa belum
if($_SESSION['level']==""){
  header("Location:login.php?pesan=gagal");
}

//membuat session user
  $email = $_SESSION['email'];
  $nama = $_SESSION['nama'];
  $ttl = $_SESSION['ttl'];
  $jkelamin = $_SESSION['jkelamin'];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/akun.css">

  <title>Halaman Akun | SIMBAH-G</title>
</head>

<body>
  <!-- Impor Komponen Sidebar -->
  <?php include 'sidebar.php'; ?>

  <form action="" method="POST">
    <div class="isi">
      <!-- Tabel Informasi Akun -->
      <h1>AKUN</h1><br>

      <p>Data Pribadi</p>
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Nama</th>
            <td><?=$nama;?></td>
          </tr>
          <tr>
            <th scope="row">Tanggal Lahir</th>
            <td><?=$ttl;?></td>
          </tr>
          <tr>
            <th scope="row">Jenis Kelamin</th>
            <td><?=$jkelamin;?></td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td><?=$email;?></td>
          </tr>
        </tbody>
      </table>
      <br><br>
      <!-- Akhir Tabel Informasi Akun -->

      <!-- Form Ubah Password-->
      <p>Ubah Password</p>
      <div class="isi1">
        <table>
          <tr>
            <td>Password Lama</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td>Password Baru</td>
            <td><input type="password" name="password_baru"></td>
          </tr>
          <tr>
            <td>Konfirmasi Password Baru</td>
            <td><input type="password" name="konfirmasi_password"></td>
          </tr>
        </table>
        <button type="submit" name="btnpass" class="btn btn-success">SIMPAN</button>
      </div>
      <!-- Akhir Form Ubah Password-->
    </div>

    <?php
    if(isset($_POST["btnpass"])){
      $password = $_POST["password"];
      $password_baru = $_POST["password_baru"];
      $konfirmasi_password = $_POST["konfirmasi_password"];

      $sql = "SELECT * FROM akun WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_object($result);
      //validasi password lama

      if(password_verify($password, $row->password)){
          
        if($password_baru == $konfirmasi_password){

          //eknripsi password
          $password_baru = password_hash($password_baru, PASSWORD_DEFAULT);

          $sql = "UPDATE akun SET password = '". $password_baru ."' WHERE email = '$email'";
          mysqli_query ($conn, $sql);
          
        }else{
          echo "<script>
              alert('Konfirmmasi Password yang Anda Masukkan Tidak Sesuai!');
              </script>";
          return false;
        }
      }
    }
    ?>
  </form>
</body>

</html>