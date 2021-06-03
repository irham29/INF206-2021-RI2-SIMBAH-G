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
          <label class="col-sm-3 control-label text-right font-weight-bold">Kategori</label>
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
            <label class="col-sm-3 control-label text-right font-weight-bold">Nama Barang</label>         
            <div class="col-sm-8">
              <input type="text" class="form-control" name="tambah_nama_barang" placeholder="Nama Barang">
            </div>
          </div>
        </div>

        <!-- Target -->
        <div class="form-group">
          <div class="row">
            <label class="col-sm-3 control-label text-right font-weight-bold">Target</label>
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
        <button type="submit" name='btn_tambah' class="btn btn-success">
          Tambah
        </button>
      </div>
        </form>
    </div>
  </div>
</div>