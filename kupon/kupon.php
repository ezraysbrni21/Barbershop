<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kupon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="css/navbar.css"/>
           <link rel="stylesheet" href="css/css.css"/>
           <link rel="stylesheet" href="css/style.css"/>
           <link rel="stylesheet" href="css/navbar.css"/>
           <script src="js/navbar.js"></script>
           <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body class="bb">
	 <nav>
            
            <div class="logo">
                <img src="images/pkb.jpeg" alt="image" height="80px" width="180px"/>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Appointment</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Lowongan</a></li>
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
       
<div class="a">
	<table class="aa">
		<td>
			<p><b>Selamat Anda Mendapatkan Coupon</b></p>
			<p>Gunakan Voucher ini untuk mendaptkan potongan harga</p>
			<p>Bawalah coupon ini saat membayar produk yang anda pesan</p>
			<p style="color: red;">Masa Berlaku hingga Juni 2022</p>
			<button>Unduh</button>
		</td>
		
		<button class="g">Kembali</button>
	</table>
</div>

<footer class="footer">
    <div class="footer-left">
        <h3>Pak Kumis <br>Barbershop</h3>
    </div>
    <div class="footer-center">
        <p>
            <span style="font-size:18px"><b>Hubungi Kami</b></span>
        </p>
        <div>
            <img src="images/wa.png" class="fa fa-phone" height="30px" width="30px"></i>
            <p>+6285156968495</p>
        </div>
        <div>
            <img src="images/gmail.png" class="fa fa-envelope" height="40px" width="40px"></i>
            <p><a href="#">pakumis@gmail.com</a></p>
        </div>
        <div>
            <img src="images/map.png" class="fa fa-map-marker" height="50px" width="50px"></i>
            <p><span>Balige</span>Jl. Kartini Atas Balige, Kabupaten Toba, Sumatera Utara</p>
        </div>	
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>Social Media</span>
        </p>
        <div class="footer-media">
            <a href="#"><img src="images/instagram.png" class="fa fa-instagram" height="30px" width="30px"></i></a>
            <a href="#"><img src="images/fb.png" class="fa fa-facebook" height="30px" width="30px"></i></a>
        </div>
    </div>
    <center><p class="footer-copyright">Copyright Team 4 PSW II Institut Teknologi Del 2022</p></center>
</footer>
</html>


