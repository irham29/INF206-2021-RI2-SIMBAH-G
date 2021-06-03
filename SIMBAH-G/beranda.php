<?php
session_start();

if ($_SESSION['level'] == "") {
  header("Location:login.php?pesan=gagal");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/beranda.css">

  <title>Halaman Beranda | SIMBAH-G</title>
</head>

<body>

  <!-- Impor Komponen Sidebar -->
  <?php include 'sidebar.php'; ?>

  <!-- Awal Isi -->
  <div class="isi">
    <h1>BERANDA</h1><br>
    <div class="text-center">
      <img src="img/4.jpeg" width="38%" alt="">
    </div><br>
    <h3>Penjelasan Singkat tentang SIMBAH-G</h3>

    <p>Aplikasi Sistem Informasi Hibah Gampong atau bisa disebut aplikasi SIMBAH-G adalah sebuah aplikasi berbasis web yang dibuat untuk membantu masyarakat yang ingin menghibahkan harta bendanya tetapi tidak tau cara dan detail barnag yang dibutuhkan. Banyak masyarakat berniat untuk berhibah tetapi tidak tahu detail kebutuhan gampong. Kebutuhan gampong disini barang diluar dari dana desa dan dikhususkan untuk partisipasi masyarakat.</p>
    <p>Aplikasi Sistem Informasi Hibah Gampong bisa mencatat data kebutuhan gampong atau meunasah dan masyarakat yang berhibah. Konsepnya seperti fundraising, dan masyarakat juga langsung dapat memberikan barang yang dibutuhkan.</p>

  </div>
  <!-- Akhir Isi -->
</body>

</html>