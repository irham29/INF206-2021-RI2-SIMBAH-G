<?php require 'config.php' ?>

<!doctype html>
<html lang="en">
  <head>

    <?php include 'head-tags.php'; ?>

    <title>Halaman Pengaturan | SIMBAH-G</title>

  </head>
  <body>

    <?php include 'sidebar.php' ?>
    
    <!-- Modal Tambah -->
    <div class="modal fade" id="modal_tambah">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
          <!-- Header Modal Tambah-->
          <div class="modal-header">
            <h4 class="modal-title">Tambah Barang</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Body Modal Tambah-->
          <div class="modal-body">

            <form action="tambah.php" method="POST" role="form">
            
            <!-- Kategori -->
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Kategori</label>
                <div class="col-sm-8">
                  <select name="tambah_kategori" class="form-control select2" style="width: 100%;">
                    <option value="Pilih Kategori" selected="selected">Pilih Kategori</option>
                    <option value="Sarpras">Sarpras</option>
                    <option value="Meunasah">Meunasah</option>
                  </select>
                </div>
              </div>
            </div>
            
            <!-- Nama Barang -->
            <div class="form-group">
              <div class="row">
                <label class="col-sm-3 control-label text-right">Nama Barang</label>         
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="tambah_nama_barang" placeholder="Nama Barang">
                </div>
              </div>
            </div>

            <!-- Target -->
            <div class="form-group">
              <div class="row">
                <label class="col-sm-3 control-label text-right">Target</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="tambah_target" placeholder="Target">
                </div>
              </div>
            </div>
            
          </div>
          
          <!-- Footer Modal Tambah-->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            
            <!-- Tombol Tambah -->
            <button type="button submit" name='btn_tambah' class="btn btn-success">
              Tambah
            </button>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modal_edit">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
          <!-- Header Modal Edit-->
          <div class="modal-header">
            <h4 class="modal-title">Edit Barang</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Body Modal Edit-->
          <div class="modal-body">

            <form action="" method="post" role="form">
            
            <!-- Kategori -->
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Kategori <span class="text-red">*</span></label>
                <div class="col-sm-8"><select name="role" class="form-control select2" style="width: 100%;">
                  <option value="User" selected="selected">-- Pilih Kategori --</option>
                  <option value="admin">Sarpras</option>
                  <option value="staff">Meunasah</option>
                </select>
                </div>
              </div>
            </div>
            
            <!-- Nama Barang -->
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nama Barang <span class="text-red">*</span></label>         
              <div class="col-sm-8"><input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value=""></div>
              </div>
            </div>

            <!-- Target -->
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Target <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" class="form-control" name="target" placeholder="Target" value=""></div>
              </div>
            </div>
            
            <!-- Tercapai -->
             <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Tercapai <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" class="form-control" name="tercapai" placeholder="Tercapai" value=""></div>
              </div>
            </div>
            
          </div>
          
          <!-- Footer Modal Edit-->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success">Edit</button>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="modal_hapus">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
          <!-- Header Modal Hapus-->
          <div class="modal-header">
            <h4 class="modal-title">Hapus Barang</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Body Modal Hapus-->
          <div class="modal-body">
            Apakah anda yakin ingin menghapus barang ini?
          </div>

          <!-- Footer Modal Hapus-->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success">Hapus</button>
          </div>

        </div>
      </div>
    </div>

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
              $mysqli = new mysqli($hostname, $username, $password, $dbname);

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
                  <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal_edit">
                    <span class="material-icons">edit</span>
                  </button>
                    
                  <!-- Tombol Hapus -->
                  <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal_hapus">
                    <span class="material-icons">delete</span>
                  </button>
                </td>
              </tr>
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