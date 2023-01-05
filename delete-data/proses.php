<?php
// Include Koneksi
include 'koneksi.php';

// Menangkap data ID yang di kirim dari URL
$id_buku = $_GET['id_buku'];

// mengahapus data dari tabel buku yah
mysqli_query($koneksi, "delete from buku where id_buku='$id_buku'");

// mengalihkan ke tampilan awal yah
header("location:index.php");

?>