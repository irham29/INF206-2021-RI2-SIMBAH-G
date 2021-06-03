<?php

$server = "localhost";
$userserve = "root";
$passserve = "";
$database = "simbahg";

$conn = mysqli_connect($server, $userserve, $passserve, $database);

if (!$conn){
    echo "Connection Failed!!!";
}

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "simbahg";

?>