<?php 

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from akun where email = '$email'";
$result = $conn-> query($sql);
$row = $result->fetch_assoc();

if($row){
	// verifikasi password
	if(password_verify($password, $row["password"])){
		// buat Session
		session_start();
		$_SESSION["row"] = $row;
		// login sukses, alihkan ke halaman timeline
		header("Location:beranda.php");
	}else{
        // buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>