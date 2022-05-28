<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan</title>
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/sticky.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/sticky.js"></script>
    <link rel="stylesheet" href="bootstrap/css/navbar.css"/>
    <link rel="stylesheet" href="bootstrap/css/style.css"/>

    <script src="bootstrap/js/navbar.js"></script>
    
<header>
    <nav>
        <div class="logo">
            <img src="bootstrap/images/pkb.jpeg" alt="image" height="80px" width="180px"/>
        </div>
        <ul style="font-size:16px">
            <li><a href="../Home/Home.php">Home</a></li>
            <li><a href="../PakKumis/app/appointment.php">Appointment</a></li>
            <li><a href="../crud info/index.php">Informasi</a></li>
            <li><a href="../Layanan/Layanan.php">Layanan</a></li>
            <li><a href="../produkcart/multi_tab_shopping_cart.php">Produk</a></li>
            <li><a href="../PakKumis/notifikasi/index.php">Notifikasi</a></li>
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
    <h1>Layanan</h1> 
    <img src="bootstrap/images/pr.jpg" class="dd" alt=""/>
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title">Potong Rambut</h5>
                <p class="card-text">Tampil beda dengan potong rambut yang rapi dan ....</p>
                <a href="#" class="btn btn-primary">See Details</a>
            </div>
            </div>
            

        <div class="free" style="display:flex">
        <img src="bootstrap/images/wajah.jpg" class="gg" style="top: 900px" alt=""/>
        <div class="cards" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title">Perawatan Wajah</h5>
                <p class="card-text">Protect your facial skin dengan menikmati perawatan ....</p>
                <a href="#" class="btn btn-primary">See Details</a>
            </div>
            </div>
        </div>

</body>
<footer class="footer" style="margin-top: 1500px;">
        <div class="footer-left">
            <h3>Pak Kumis <br>Barbershop</h3>
        </div>
        <div class="footer-center">
			<p style="text-align: left;">
                <span style="font-size:18px"><b>Hubungi Kami</b></span>
            </p>
			<div>
                <img src="bootstrap/images/wa.png" class="fa fa-phone" height="30px" width="30px"></i>
                <p style="text-align: left;">+6285156968495</p>
            </div>
            <div>
                <img src="bootstrap/images/gmail.png" class="fa fa-envelope" height="40px" width="40px"></i>
                <p style="text-align: left;"><a href="#">pakumis@gmail.com</a></p>
            </div>
            <div>
                <img src="bootstrap/images/map.png" class="fa fa-map-marker" height="80px" width="80px"></i>
                <p style="text-align: center; font-size: 15px;"><span>Balige</span>Jl. Kartini Atas Balige, Kabupaten Toba, Sumatera Utara</p>
            </div>	
        </div>

        <div class="footer-right">
            <p class="footer-about" style="text-align: left;">
                <span>Social Media</span>
            </p>
            <div class="footer-media">
				<a href="#"><img src="bootstrap/images/instagram.png" class="fa fa-instagram" height="30px" width="30px"></i></a>
                <a href="#"><img src="bootstrap/images/fb.png" class="fa fa-facebook" height="30px" width="30px"></i></a>
            </div>
        </div>
		<center><p class="footer-copyright">Copyright Team 4 PSW II Institut Teknologi Del 2022</p></center>
    </footer>

<html>