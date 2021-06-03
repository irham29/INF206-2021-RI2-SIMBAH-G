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
    <link rel="stylesheet" href="css/support.css">

    <title>Halaman Support | SIMBAH-G</title>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <!-- Awal Isi -->
    <div class="isi">
        <h1>SUPPORT</h1><br>
        <div class="support-text">
            <p class="text-center">Butuh Bantuan?<br>Silahkan Hubungi Admin melalui Whatsapp di bawah ini</p>
            <a href="https://api.whatsapp.com/send?phone=no-hp"><img src="img/icons/whatsapp.svg" alt="Whatsapp icon"></a>
        </div>

    </div>
    <!-- Akhir Isi -->

</body>

</html>