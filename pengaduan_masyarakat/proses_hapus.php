<?php
$id = $_GET['id'];

$koneksi = new PDO('mysql:host=localhost;dbname=db_pengaduan_masyarakat_kayla', 'root', '');


$koneksi->query("DELETE FROM pengaduan where id_pengaduan='$id'");

header("location:../home.php");                                                                                                                          