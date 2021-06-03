<?php 
session_start();

require 'config.php';

if($_SESSION['level']=="0"){
  echo "<script>
				alert('Silahkan Login Sebagai Admin!!!');
		    </script>";
   header("Location:beranda.php?pesan=gagal");
   
}
?>

<!doctype html>
<html lang="en">
  <head>

    <?php include 'head-tags.php'; ?>

    <title>Halaman Pengaturan | SIMBAH-G</title>

  </head>
  <body>

    <?php include 'sidebar.php'; ?>
    
    <?php include 'modal_tambah.php'; ?>

    <div class="isi">
      <div class="row">
        <h1>Pengaturan</h1>
      
        <!-- Tabel Kebutuhan Gampong -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">KATEGORI</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">TARGET</th>
                <th scope="col">TERCAPAI</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody >
            
              <?php
                include 'update_tercapai.php';
                
                $mysqli = new mysqli($server, $userserve, $passserve, $database);

                $select_records = "SELECT * FROM barang";
                $records = $mysqli->query($select_records);

                while($record = $records->fetch_assoc()) {
              ?>

              <tr>
                <td><?php echo $record['kategori']; ?></td>
                <td><?php echo $record['nama']; ?></td>
                <td><?php echo $record['target']; ?></td>
                <td><?php echo $record['tercapai']; ?></td>
                <td>
                  <!-- Tombol Edit -->
                  <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal_edit<?php echo $record['id']; ?>">
                    <span class="material-icons">edit</span>
                  </button>
                    
                  <!-- Tombol Hapus -->
                  <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal_hapus<?php echo $record['id']; ?>">
                    <span class="material-icons">delete</span>
                  </button>
                </td>
              </tr>

              <?php 
                include 'modal_edit.php'; 
                include 'modal_hapus.php';
                }
              ?>
            
            </tbody>
          </table>
        </div>

      <!-- Tombol Tambah -->  
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_tambah">
        TAMBAH
      </button>
  
        <!-- Close connection to DB -->
      <!-- <?php ?> -->
    
    </div>

  </body>
</html>