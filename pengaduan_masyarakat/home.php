<?php

$koneksi = new PDO("mysql:host=localhost;dbname=db_pengaduan_masyarakat_kayla","root", "");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();


//if($koneksi){
//  echo "koeksi berhasil";
//}else{
  //echo "koneksi gagal";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <title>tampilan home</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gambar</title>
    <style>
        body{
            background-image: url(pengaduan.png.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }

        
    </style>
</head>
<body>
</body>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #1C2870;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font face="comic sans ms" color="white">Pengaduan Masyarakat</font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="home.png.png" alt="Image" height="20" width="20">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home.php"><font face="comic sans ms" color="white">Home</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proses_isi_pengaduan.php"><font face="comic sans ms" color="white">Buat Pengaduan</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="isi_pengiriman_pengaduan.php"><font face="comic sans ms" color="white">Hasil Pengaduan</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><font face="comic sans ms" color="white">Tanggapan</font></a>
        </li>
      </ul>
      </div>
<script>
    function confirmLogout() {
        var confirmLogout = confirm("Anda yakin ingin logout?");
        if (confirmLogout) {
            window.location.href = "tampilanlogin.php"; 
        }
    }
</script>

<a class="nav-link" href="tampilanlogin.php"><button class="btn btn-outline-success" onclick="confirmLogout()"><font face="comic sans ms" color="white"><img src="logout.png.png" alt="Image" height="20" width="20">Logout</font></button></a>

  </div>