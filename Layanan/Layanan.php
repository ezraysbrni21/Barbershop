<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Layanan Pak Kumis Barbershop</title>
        <meta charset="UTF-8">
        <meta name="description" contents="Pak Kumis Barbershop">
        <link rel="stylesheet" href="Layanan.css" type="text/css">
    </head>

    <body>
        <header>
            <nav id="navigation">
            <img src="img/logo.png" alt="logo">
                <ul>
                    <li><a href="index.php?page=contact">Produk</a></li>
                    <li><a href="index.php?page=contact">Layanan</a></li>
                    <li><a href="index.php?page=contact">Informasi</a></li>
                    <li><a href="index.php?page=about">Appointment</a></li>
                    <li><a href="index.php?page=home">Home</a></li>
                </ul>
            </div>    
        </header>
        <div id="contents">
            <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
    
                switch ($page) {
                    case 'home':
                    include "Home.php";
                    break;
                    case 'appointment':
                    include "Appointment.php";
                    break;
                    case 'Informasi':
                    include "Informasi.php";
                    break;
                    case 'Layanan':
                    include "Layanan.php";
                    break;
                    case 'Produk':
                    include "Produk.php";
                    break;          
                }
            }
    else{
                include "Home.php";
            }
            ?>
        </div>

        <nav>
            <h1>Layanan<h1>
        
            
        <nav>

        <footer>
            Copyright Team 4 PSW II Institut Teknologi Del 2022
        </footer>
    </body>
</html>