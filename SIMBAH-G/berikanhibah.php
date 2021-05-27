<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/berikanhibah.css">
        
        <title>SIMBAH-G</title>
    </head>
    
    <body>
        
        <!-- Impor Komponen Sidebar -->
        <?php include 'sidebar.php'; ?>
        
        
        <!-- Awal Isi -->
        <div class="isi">
            <h1>Berikan Hibah</h1><br>
            <div class="isi1">
                <table>
                    <div class="dropdown">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Silahkan Pilih</option>
                            <option value="1">Sarpras</option>
                            <option value="2">Dana</option>
                            <option value="3">Meunasah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Barang</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Silahkan Pilih</option>
                            <option value="1">Piring</option>
                            <option value="2">Lampu</option>
                            <option value="3">Tenda</option>
                            <option value="4">Kursi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input type="number" name="konfirmasi password"></td>
                    </tr>
                </table>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#exampleModal">PROSES</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">Terima kasih.<br> Hibah anda sedang diproses.<br>Mohon datang ke kantor Keuchik</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">TUTUP</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Akhir Isi -->
        
        <?php
        if(isset($_POST ['submit'])){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
            
            $sqlGet = "SELECT * FROM mahasiswa WHERE nim='$nim'";
            $queryGet = mysqli_query($conn, $sqlGet);
            $cek = mysqli_num_rows($queryGet);
            
            $sqlInsert = "INSERT INTO mahasiswa(nim, nama, jurusan, alamat, telp)
                        VALUES ('$nim', '$nama', '$jurusan', '$alamat', '$telp')";
                        
            $queryInsert = mysqli_query($conn, $sqlInsert);
            
            if (isset($sqlInsert) && $cek <= 0) {
                echo "
                <div class='alert alert-success mt-3'>Data Berhasil ditambahkan</div>
                ";
            } else if ($cek > 0 ){
                echo"<div class='alert alert-danger mt-3'>Data Gagal ditambahkan</div>
                ";
            }
        }
        ?>
                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>