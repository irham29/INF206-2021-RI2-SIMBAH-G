<?php

include ('config.php');

//fungsi query untuk mengambil data
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//fungsi registrasi untuk menyimpan data dari user
function registrasi($data){
	global $conn;

	$nama = strtolower(stripslashes($data["nama"]));
	$ttl = $data["ttl"];
	$nik = $data["nik"];
	$jkelamin = $data["jkelamin"];
	$email = $data["email"];
	$password =  mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT email FROM akun WHERE email = '$email'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('Email yang Anda Masukkan Sudah Tersedia!')
		      </script>";
		return false;
	}

	//validasi password
	if($password !== $password2){
		echo "<script>
				alert('Konfirmmasi Password yang Anda Masukkan Tidak Sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO akun VALUES('','$nama','$ttl','$nik','$jkelamin','$email', '$password', '')");

	return mysqli_affected_rows($conn);
}
?>