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
    <title>isi pengaduan</title>
</head>
<body>
</body>
<body>
    </div>
    <a class="nav-link" href="proses_isi_pengaduan.php"><button class="btn btn-outline-success" type="submit"><font face="comic sans ms" color="white">Kembali</font></button></a>
  </div>

</nav>
    </div>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><font face="comic sans ms">no</font></th>
      <th scope="col"><font face="comic sans ms">nik</font></th>
      <th scope="col"><font face="comic sans ms">id pengaduan</font></th>
      <th scope="col"><font face="comic sans ms">tanggal pengaduan</font></th>
      <th scope="col"><font face="comic sans ms">isi laporan</font></th>
    </tr>
  </thead>
  <tbody>
  <?php
$koneksi = mysqli_connect("localhost", "root", "", "db_pengaduan_masyarakat_kayla");

$id_pengaduan = $_POST['id_pengaduan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];

$query = "INSERT INTO pengaduan VALUES('$id_pengaduan', 'tgl_pengaduan', 'nik', 'isi_laporan0')";

mysqli_query($koneksi, $query);

?>
  </tbody>
</table>
</body>
</html>