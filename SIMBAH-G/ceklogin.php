<?php 

session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    //verifikasi password_hash
    if(password_verify($password, $data['password'])){
        
        if($data['level'] == "1"){
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "1";
            $_SESSION['nama'] = $nama =$data["nama"];
            $_SESSION['ttl'] = $ttl =$data["tgl_lahir"];
            $_SESSION['jkelamin'] = $jkelamin =$data["jenis_kelamin"];
            
            header("Location:pengaturan.php");
        }else if ($data['level'] == "0"){
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "0";
            $_SESSION['nama'] = $nama =$data["nama"];
            $_SESSION['ttl'] = $ttl =$data["tgl_lahir"];
            $_SESSION['jkelamin'] = $jkelamin =$data["jenis_kelamin"];
            
            header("Location:beranda.php");
        }else{
            header("Location:login.php?pesan=gagal");
        }
    }else{
        header("Location:login.php?pesan=gagal");
    }
}else{
    header("Location:login.php?pesan=gagal");
}
?>