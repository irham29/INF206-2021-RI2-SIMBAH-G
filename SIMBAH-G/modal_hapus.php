<!-- Modal Hapus -->
<div class="modal fade" id="modal_hapus<?php echo $record['id']; ?>">
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
        <a href="hapus.php?id=<?php echo $record['id']; ?>" id="btn_hapus" class="btn btn-success">Hapus</a>
      </div>

    </div>
  </div>
</div>