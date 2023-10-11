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
    <title>proses isi pegaduan</title>
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
    <form action="isi_pengiriman_pengaduan.php" method="post">
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
</nav>
  <form class="row g-3">
  <div class="col-md-2">
  <br><font face="comic sans ms"><label for="id pengaduan" class="form-label">Id Pengaduan</label></font></br>
    <input type="text" class="form-control" id="pengaduan">
  </div>
  <div class="col-md-2">
  <br><font face="comic sans ms"><label for="tanggal pengaduan" class="form-label">Tanggal Pengaduan</label></font></br>
    <input type="date" class="form-control" id="tanggal">
  </div>
  <div class="col-2">
  <br><font face="comic sans ms"><label for="nik" class="form-label">Nik</label></font><br>
    <input type="text" class="form-control" id="nik">
  </div>
  <div class="col-5">
  <br><font face="comic sans ms"><label for="isi laporan" class="form-label">Isi Laporan</label></font></br>
    <input type="text" class="form-control" id="isi laporan">
  </div>
  <div class="col-3">
  <br><font face="comic sans ms"><label for="bukti foto" class="form-label">Bukti foto</label></font></br>
  <font face="comic sans ms"><input type="file" class="form-control" id="bukti foto"></font>
  </div>
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck"><font face="comic sans ms">Cek kembali</label></font>
    </div>
  </div>
  <div class="col-12">
  <a class="nav-link" href="isi_pengiriman_pengaduan.php"><button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
  </tbody>
</table>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_POST['nik'];
    $isi_laporan = htmlspecialhars($_POST['isi_laporan']);
    
    
    $query = $koneksi->prepare("INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto) VALUES (?, ?, ?, ?, ?)");
    $query->execute([$id_pengaduan, $tgl_pengaduan, $nik, $isi_laporan, $foto]);
}
?>