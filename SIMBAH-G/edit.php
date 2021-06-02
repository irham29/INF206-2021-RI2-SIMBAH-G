<?php
  require 'config.php';

  if( isset($_POST["btn_edit"])) {
    $id_barang = $_POST["id_barang"];
    $kategori = $_POST["edit_kategori"];
    $nama_barang = $_POST["edit_nama"];
    $target = $_POST["edit_target"];
    $tercapai = $_POST["edit_tercapai"];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli($hostname, $username, $password, $dbname);
    
    $sql_edit = "UPDATE barang SET 
                  kategori='$kategori',
                  nama='$nama_barang',
                  target='$target',
                  tercapai='$tercapai'
                WHERE id='$id_barang'";

    $mysqli->query($sql_edit);

    header('location: pengaturan.php');

  }

?>