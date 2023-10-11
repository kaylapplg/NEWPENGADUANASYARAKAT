<?php 

include "koneksi.php";
$isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id'];

$query = $koneksi->query("UPDATE `pengaduan` SET isi_laporan='isi_laporan' where id_pengaduan='$id'");

header("localhost:../home.php");

// UPDATE `pengaduan` SET `id_pengaduan`='[value-1]', `tgl_pengaduan`='[value-2]', `nik`='[value-3]', `isi_laporan`='[value-4]', `foto`='[value-5]', `status`='[value-6]' where 1