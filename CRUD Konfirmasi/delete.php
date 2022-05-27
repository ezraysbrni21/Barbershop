<?php
include 'config.php';
$id = $_GET["pekerjaan"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM informasi WHERE pekerjaan='$pekerjaan' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus informasi: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Informasi berhasil dihapus.');window.location='index.php';</script>";
    }