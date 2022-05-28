<?php
// $servername = "localhost";
// $database = "barbershop";
// $username = "root";
// $password = "";
 
// // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// // membuat koneksi
// $conn = mysqli_connect($servername, $username, $password, $database);
// // mengecek koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// mysqli_close($conn);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "barbershop";

    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die ("Tidak Terkoneksi");
    }
?>