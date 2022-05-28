<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perawatan Wajah</title>
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/sticky_055.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/sticky.js"></script>
    <link rel="stylesheet" href="bootstrap/css/navbar.css"/>
    <link rel="stylesheet" href="bootstrap/css/style.css"/>

    <script src="bootstrap/js/navbar.js"></script>
    
</head> 
<header>
    <nav>
        <div class="logo">
            <img src="bootstrap/images/pkb.jpeg" alt="image" height="80px" width="180px"/>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Appointment</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Notifikasi</a></li>
            <li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["barbershop"])) { echo count($_SESSION["barbershop"]); } else { echo '0';}?></span></a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
<body>
   <h1 class="zx">Perawatan Wajah</h1>
   <br>
   <img src="images/pw.jpg" class="cv">
   <br>
   <p class="fg">Protect your facial skin dengan menikmati perawatan wajah dari layanan Pak Kumis. Perawatan Wajah Pak Kumis sangat terpercaya</p>
   <p class="ty">Investasikan pada kulitmu,
Ini akan mewakilimu
untuk waktu yang sangat lama. Mari merawat kulit bersama Pak Kumis</p>
<br>
<p class="we">Perawatan wajah adalah kesenangan
abadi dan mari mewujudkannya
bersama layanan Pak Kumis</p>
<br>
<p class="ui">Akan ada potongan harga sebesar 15%
bagi kamu yang akan menjadi pelanggan tetap Pak Kumis </p>
<br>
<br>

<html>