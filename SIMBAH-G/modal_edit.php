<!-- Modal Edit -->
<div class="modal fade" id="modal_edit<?php echo $record['id']; ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <!-- Header Modal Edit-->
      <div class="modal-header">
        <h4 class="modal-title">Edit Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Body Modal Edit-->
      <div class="modal-body">
      
        <form action="edit.php" method="POST" role="form">

        <?php 
          $id_barang = $record['id'];
          $query = "SELECT * FROM barang WHERE id='$id_barang'";
          $barangs = $mysqli->query($query);
          
          while( $barang = $barangs->fetch_assoc()) {
        ?>
      
        <input type="hidden" name="id_barang" value="<?php echo $barang['id']; ?>">

        <!-- Kategori -->
        <div class="form-group">
          <div class="row">
          <label class="col-sm-3 control-label text-right font-weight-bold">Kategori</label>
            <div class="col-sm-8"><select name="edit_kategori" class="form-control select2" style="width: 100 %;">
              <option value="Pilih Kategori" >Pilih Kategori</option>
              <option value="Sarpras" <?php echo $barang['kategori'] == 'Sarpras'? 'selected' : ''; ?>>Sarpras</option>
              <option value="Meunasah" <?php echo $barang['kategori'] == 'Meunasah'? 'selected' : ''; ?>>Meunasah</option>
            </select>
            </div>
          </div>
        </div>
        
        <!-- Nama Barang -->
        <div class="form-group">
          <div class="row">
            <label class="col-sm-3 control-label text-right font-weight-bold">Nama Barang</span></label>         
          <div class="col-sm-8"><input type="text" class="form-control" name="edit_nama" value="<?php echo $barang['nama']; ?>"></div>
          </div>
        </div>

        <!-- Target -->
        <div class="form-group">
          <div class="row">
            <label class="col-sm-3 control-label text-right font-weight-bold">Target</label>
          <div class="col-sm-8"><input type="number" class="form-control" name="edit_target" value="<?php echo $barang['target']; ?>"></div>
          </div>
        </div>
        
        <!-- Tercapai -->
          <div class="form-group">
          <div class="row">
            <label class="col-sm-3 control-label text-right font-weight-bold">Tercapai</label>
          <div class="col-sm-8"><input type="number" class="form-control" name="edit_tercapai" value="<?php echo $barang['tercapai']; ?>"></div>
          </div>
        </div>
        
      </div>
      
      <!-- Footer Modal Edit-->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" name="btn_edit" class="btn btn-success">
          Edit
        </button>
      </div>

      </form>
      <?php } ?>
    </div>
  </div>
</div>
