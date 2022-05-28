<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASK</title>
    
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
            <img src="bootstrap/images/logo.jpeg" alt="image" height="80px" width="180px"/>
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
 <p class="ringkasan">Ringkasan Pemesanan</p>
    <center><div class="container">
        <center><div class="row">
                <div class="card-box" id="box">
                    <div class="card-thumbnail">
                        <center>
                            <table width="300px">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>:</td>
                                    <td>xxxxxx</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi Produk</td>
                                    <td>:</td>
                                    <td>xxxxxx</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Produk</td>
                                    <td>:</td>
                                    <td>XXX</td>
                                </tr>
                                <tr>
                                    <td>Total Pembayaran</td>
                                    <td>:</td>
                                    <td>Rp. xxxxxx</td>
                                </tr>
                            </table>
                        </center>
                    </div>
                    <center><div class="box"><p class="pesan">Kode pemesanan:</p><br>
                        <p class="kode">XyZ1002xxx</p>
                    </div></center>
                    <p id="kode">CATATAN: </p>
                       <p id="code"> Pembayaran dapat anda lakukan di toko kami dengan membawa struk pembayaran ini. <br>
                        Lakukanlah pembayaran dan penjemputan produk ini 2x24 jam. 
                        Terimakasih</p>
                        <button type="submit" id="submit2" href="#">Apply Coupon</button>
                </div>
                <button type="submit" id="submit" href="#">Kembali</button>
        </div>
    </div></center>
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
                <img src="images/wa.png" class="fa fa-phone" height="30px" width="30px"></i>
                <p style="text-align: left;">+6285156968495</p>
            </div>
            <div>
                <img src="images/gmail.png" class="fa fa-envelope" height="40px" width="40px"></i>
                <p style="text-align: left;"><a href="#">pakumis@gmail.com</a></p>
            </div>
            <div>
                <img src="images/map.png" class="fa fa-map-marker" height="80px" width="80px"></i>
                <p style="text-align: center; font-size: 15px;"><span>Balige</span>Jl. Kartini Atas Balige, Kabupaten Toba, Sumatera Utara</p>
            </div>	
        </div>

        <div class="footer-right">
            <p class="footer-about" style="text-align: left;">
                <span>Social Media</span>
            </p>
            <div class="footer-media">
				<a href="#"><img src="images/ig.png" class="fa fa-instagram" height="30px" width="30px"></i></a>
                <a href="#"><img src="images/fb.png" class="fa fa-facebook" height="30px" width="30px"></i></a>
            </div>
        </div>
		<center><p class="footer-copyright">Copyright Team 4 PSW II Institut Teknologi Del 2022</p></center>
    </footer>

<html>