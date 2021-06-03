<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/beranda.css">

    <title>Halaman History | SIMBAH-G</title>
  </head>
  <body>
      <?php
        session_start();

        include 'config.php';

        if($_SESSION['level'] == ""){
        header("Location:login.php?pesan=gagal");
        }
      ?>
    
    <!-- Impor Komponen Sidebar -->
    <?php include 'sidebar.php'; ?>
    
    <!-- Awal Isi -->
    <div class="isi">
      <div class="row">
        <h1>HISTORY</h1>

        <!-- Tabel History -->
        <div class="table-responsive">
          <table class="table table-striped table-hover mt-3">
            <thead>
              <tr>
                <th scope="col">KATEGORI</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">TARGET</th>
                <th scope="col">TANGGAL</th>
              </tr>
            </thead>

            <?php
            $sqlGet = "SELECT * FROM berikan_hibah";
            $query = mysqli_query($conn, $sqlGet);

            while($data = mysqli_fetch_array($query)){
              echo "
                <tbody>
                  <tr>
                    <td>$data[kategori]</td>
                    <td>$data[jenis_barang]</td>
                    <td>$data[jumlah]</td>
                    <td>$data[tgl_hibah]</td>
                  </tr>
                </tbody>
              ";
            }
            ?>
          </table>
        </div>
      </div>
    </div>
    <!-- Akhir Isi -->
  </body>
</html>