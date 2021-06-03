<?php
session_start();

include 'config.php';

if($_SESSION['level']==""){
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
  <link rel="stylesheet" href="css/kebutuhan.css">

  <title>Halaman Kebutuhan Gampong | SIMBAH-G</title>
</head>

<body>

  <!-- Impor Komponen Sidebar -->
  <?php include 'sidebar.php'; ?>

  <!-- Awal Isi -->
  <form action="" method="POST">
    <div class="isi">
      <div class="row">
        <h1>KEBUTUHAN GAMPONG</h1>

        <!-- Awal Tabel Kebutuhan Gampong -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">KATEGORI</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">TARGET</th>
                <th scope="col">TERCAPAI</th>
              </tr>
            </thead>
            <?php
                $mysqli = new mysqli($server, $userserve, $passserve, $database);

                $select_records = "SELECT * FROM barang";
                $records = $mysqli->query($select_records);

                while($record = $records->fetch_assoc()) {
                  echo "<tbody>
                        <tr>
                          <td>$record[kategori]</td>
                          <td>$record[nama]</td>
                          <td>$record[target]</td>
                          <td>$record[tercapai]</td>
                        </tr> 
                  ";
                }
              ?>
          </table>
        </div>
        <!-- Akhir Tabel Kebutuhan Gampong -->

        <!-- Button Action Modal Berikan Hibah -->
        <div class="d-grid gap-2 d-md-block">
          <button type="button" class="btn btn-success " name="berikanhibah" data-bs-toggle="modal" data-bs-target="#exampleModal">BERIKAN HIBAH</button>
        </div>
        <!-- Akhir Button Action Berikan Hibah -->

        <!-- Awal Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Edit Barang</h4>
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Akhir Modal Header -->

              <!-- Modal Body -->
              <div class="modal-body text-center">
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-3 control-label text-right">Nama <span class="text-red"></span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="namahibah" placeholder="Nama" value="" required>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 control-label text-right">Kategori <span class="text-red"></span></label>
                    <div class="col-sm-8">
                      <select name="kategori" class="form-control select2" style="width: 100%;" required>
                        <option selected>Pilih Kategori</option>
                        <option value="Sarpras">Sarpras</option>
                        <option value="Meunasah">Meunasah</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 control-label text-right">Barang <span class="text-red"></span></label>
                    <div class="col-sm-8">
                      <select class="form-control select2" name="jbarang" style="width: 100%;" required>
                        <option selected>Pilih Barang</option>
                        <option value="Piring">Piring</option>
                        <option value="Lampu">Lampu</option>
                        <option value="Tenda">Tenda</option>
                        <option value="Kursi">Kursi</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 control-label text-right">Jumlah <span class="text-red"></span></label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="jhibah" placeholder="Jumlah Hibah" value="" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Akhir Modal Body -->

              <!-- Modal Footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">PROSES</button>
              </div>
              <!-- Akhir Modal Footer -->

            </div>
          </div>
        </div>
        <!-- Akhir Modal -->
      </div>
    </div>

    <?php
        if (isset($_POST['submit'])) {
    
          $namahibah = $_POST['namahibah'];
          $kategori = $_POST['kategori'];
          $jbarang = $_POST['jbarang'];
          $jhibah = $_POST['jhibah'];
    
          $sql="INSERT INTO berikan_hibah (nama_penghibah, kategori, jenis_barang, jumlah) 
                  VALUES ('$namahibah', '$kategori', '$jbarang', '$jhibah')";
            
          $hasil = mysqli_query($conn, $sql);
        }
        ?>
  </form>
  <!-- Akhir Isi -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>