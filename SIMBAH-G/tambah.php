<?php
  require 'config.php';

  if( isset($_POST['btn_tambah'])) {
    $kategori = $_POST['tambah_kategori'];
    $nama_barang = $_POST['tambah_nama_barang'];
    $target = $_POST['tambah_target'];
    $tercapai = 0;
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli($hostname, $username, $password, $dbname);

    $sql_tambah = "INSERT INTO barang (
                    kategori,
                    nama,
                    target,
                    tercapai
                  ) 
                
                 VALUES(
                    '$kategori',
                    '$nama_barang',
                    '$target',
                    '$tercapai'
                  )";
  
    $mysqli->query($sql_tambah);

    header('location: pengaturan.php');
  }

?>