<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "barbershop"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  // if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
  //   die ("Koneksi dengan database gagal: ".mysql_connect_error());
  // }

function query($query){
    global $koneksi; 
    $result = mysqli_query($koneksi, $query);
    $row = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $firstname = htmlspecialchars($data['firstname']);
    $lastname = htmlspecialchars($data['lastname']);
    $email = htmlspecialchars($data['email']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $layanan = htmlspecialchars($data['layanan']);

    $query = "INSERT INTO pesanan VALUES ('', '$firstname', '$lastname', '$email', '$tanggal', '$layanan')";
    //insert the data to database
    mysqli_query($koneksi, $query); 

        return mysqli_affected_rows($koneksi);
}

  
?>
