<?php 
  require 'config.php';

    $id_barang = $_GET["id"];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli($server, $userserve, $passserve, $database);
    
    $sql_hapus = "DELETE FROM barang
                  WHERE id='$id_barang'";

    $mysqli->query($sql_hapus);

    header('location: pengaturan.php');

?>