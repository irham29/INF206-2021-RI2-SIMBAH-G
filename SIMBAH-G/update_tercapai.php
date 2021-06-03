<?php
  require 'config.php';

  $mysqli = new mysqli($hostname, $username, $password, $dbname);

  $select_records = 
    "SELECT id, B.kategori, nama, target, SUM(jumlah) jumlah
    FROM Barang B, Berikan_hibah H 
    WHERE B.Kategori=H.Kategori AND B.Nama=H.Jenis_barang 
    GROUP BY Kategori, Nama";
  
  $records = $mysqli->query($select_records);

  while($record = $records->fetch_assoc()) {
    $update_tercapai = "UPDATE barang SET tercapai = {$record['jumlah']} WHERE id = {$record['id']}";

    $mysqli->query($update_tercapai);
  }
?>