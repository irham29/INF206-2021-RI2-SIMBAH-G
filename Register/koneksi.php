<?php

// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "daftar");


function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}



function registrasi($data) {
	global $koneksi;

	$username = strtolower(stripslashes($data["username"]));
	$nama = $data["nama"];
	$tanggal = $data["tanggal"];
	$nik = $data["nik"];
	$jeniskelamin = $data["jeniskelamin"];
	$email = $data["email"];
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);


	// cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT username FROM db_user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah tersedia!')
		      </script>";
		return false;
	}

	if( $password !== $password2 ) {
		echo "<script>
				alert('password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($koneksi, "INSERT INTO db_user VALUES('','$nama','$tanggal','$nik','$jeniskelamin','$email', '$username', '$password')");

	return mysqli_affected_rows($koneksi);

}




 ?>
