<?php 
    if(isset($_POST["tujuan"])){

        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            /* logika sederhana admin */
            if($username == "admin" && $password == "admin"){
                echo "<h1>Selamat Datang, ".$username."!</h1>";
            }else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
        }else{
            $nama = $_POST["Nama"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $nomortelepon = $_POST["Nomor Telepon"];
            $password = $_POST["password"];
            $konfirmasipassword = $_POST["Konfirmasi password"];
    
            echo "<h1>Anda sudah terdaftar sebagai ".$username."!</h1>";
            
        }
    }   
?>