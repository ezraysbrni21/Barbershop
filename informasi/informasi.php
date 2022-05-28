<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORMASI</title>
    <link rel="stylesheet" href="navbar.css">
    <script src="navbar.js"></script>
    <style>
        nav{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    display: flex;
    background-color: #001524;
    justify-content: space-around;
    padding: 20px 0;
    color: #FFECD1;
    overflow-x: hidden;
}
nav ul{
    display: flex;
    list-style: none;
    width: 40%;
    justify-content: space-between;
}

nav ul li a{
    color: #FFECD1;
    text-decoration: none;
    font-family: 'Kurale', serif;
    font-size: 1em;
}

nav ul li a:hover{
    color: #FF7D00;
}

/*Hamburger*/
.menu-toggle{
    display: none;
    flex-direction: column;
    height: 20px;
    justify-content: space-between;
    position: relative;
}

.menu-toggle input{
    position: absolute;
    width: 40px;
    height: 28px;
    left: -5px;
    top:-3px;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.menu-toggle span{
    display: block;
    width: 28px;
    height: 3px;
    background-color: #FFECD1;
    border-radius: 3px;
    transition: all 0.5s;
}

/*hamburger menu animation*/
.menu-toggle span:nth-child(2){
    transform-origin: 0 0;
}

.menu-toggle span:nth-child(4){
    transform-origin: 0 100%;
}

.menu-toggle input:checked ~ span:nth-child(2){
    background-color: #FFECD1;
    transform: rotate(45deg) translate(-1px, -1px);
}

.menu-toggle input:checked ~ span:nth-child(4){
    background-color: #FFECD1;
    transform: rotate(-45deg) translate(-1px, 0);
}

.menu-toggle input:checked ~ span:nth-child(3){
    opacity: 0;
    transform: scale(0);
}


/*Responsive*/
@media screen and (max-width: 768px){
    nav ul{
        width: 50%;
    }
}

@media screen and (max-width: 576px){
    .menu-toggle{
        display: flex;
    }
    nav ul{
        position: absolute;
        right: 0;
        top: 0;
        width: 80%;
        height: 100vh;
        justify-content: space-evenly;
        flex-direction: column;
        align-items: center;
        z-index: -1;
        background-color: #001524;
        transform: translateX(100%);
        transition: all 1s;
        opacity: 0;
    }

    nav ul.slide{
        opacity: 1;
        transform: translateX(0); 
    }
}



footer {
	font: 16px/1.6 arial, sans-serif;
    position: fixed;
    bottom: 0;
}

.footer {
    background-color: #040a18;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
    display: inline-block;
    vertical-align: top;
}

@media (max-height:800px) {
    footer {
        position: static;
    }
}

.footer .footer-left {
    width: 30%;
}

.footer h3 {
	font-size: 30px;
    color: #FF7D00 ;
    margin: 0;
    padding: 80px 0 0 0;
    font-family: Georgia, 'Time New Roman', Times, serif;
}

.footer .footer-left img {
    width: 25%;
    vertical-align: middle;
}

.footer .footer-left .credit-cards {
    width: 100%;
}

.footer .footer-copyright {
    color: #FF7D00;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
    padding-top: 10%;
}

.footer .footer-center {
    width: 35%;
}

.footer .footer-center img {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer .footer-center img.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer .footer-center p {
    display: inline-block;
    color: green;
    vertical-align: middle;
    margin: 0px;
}

.footer .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer .footer-center p a {
    color: green;
    text-decoration: none;
}

.footer .footer-right {
    width: 30%;
}

.footer .footer-about {
    line-height: 20px;
    color: green;
    font-size: 13px;
    font-weight: normal;
    margin: 0px;
}

.footer .footer-about span {
    display: block;
    color: green;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer .footer-media {
    margin-top: 25px;
}

.footer .footer-media a {
    display: inline-block;
    width: 50px;
    height: 50px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 50%;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 50px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer .footer-media a:hover {
    background-color: rgb(0, 122, 82);
}

@media (max-width: 880px) {

    .footer .footer-left,
    .footer .footer-center,
    .footer .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: left;
    }

    .footer .footer-center img {
        margin-left: 0px;
    }

}

    </style>
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <img src="image/pkb.jpeg" alt="image" height="80px" width="180px"/>
        </div>
        <ul style="font-size:16px">
            <li><a href="../Home/Home.php">Home</a></li>
            <li><a href="../PakKumis/app/appointment.php">Appointment</a></li>
            <li><a href="../informasi/informasi.php">Informasi</a></li>
            <li><a href="../Lynn/Layanan/layanan.php">Layanan</a></li>
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
    

    <img class="img1" src="image/barber.jpg">
    <br>
    <p class="p1">
        Pak Kumis Barbershop adalah penggabungan tempat potong/pangkas rambut dan salon yang bukan hanya memberikan layanan potong rambut bagi pria namun juga tempat dimana rambut, kulit kepala, wajah dan tubuh pelanggan dapat dimanjakan, dengan pelayanan dan fasilitas terbaik kepada pelanggan sehingga tingkat kenyamanan yang tinggi dapat dirasakan oleh pelanggan.
    </p>
    <br>
    <h3>
        Working Hours
    </h3>
    <div>
        <img class="jamimg" src="image/jam.png">
        <h3 class="jam">08.00-19.00</h3>
        <br>
        <img class="kalender" src="image/kalender.png">
        <h3 class="libur">Hari Minggu & Libur Besar Tutup</h3>
    </div>

    <h3 class="head3">
        Recruitment
    </h3>

    <p class="par1">
        Ayo daftarkan diri Anda. Kami membuka lowongan untuk Anda.. Jika anda tertarik silahkan datang langsung ke Pak Kumis Barbershop
    </p>

    <div class="d1"></div>
        <img class="img2" src="image/hair.jpg" width="30%">
    <a href="#"><p class="hair">Hair Stylist
    </p>
    </a>
    <div class="d2"></div> 
        <img class="img3" src="image/kasir.webp" width="30%">
        <a href="#"><p class="kasir">Kasir
        </p>
        </a>
    <div class="d3"></div>
         <img class="img4" src="image/beauty.jpg" width="30%">
        <a href="#"><p class="beauty">Beauty Therapist
        </p>
        </a>

    <div class="d4"></div>
         <img class="img5" src="image/packager.jpg" width="30%">
        <a href="#"><p class="pack">Packager
        </p>
        </a>
    

    <p class="intro">Introducing Us</p>
    <br>

    <div class="d5"> </div>
        <img class="intro1" src="image/hair.jpg" width="30%">
       <a href="#"><p class="hair2">
           Alex
       </p>
       </a>

   <div class="d6"> </div>
    <img class="intro2" src="image/jos.jpg" width="30%">
   <a href="#"><p class="hair3">Joshua
   </p>
   </a>
    
    <div class="d7"> </div>
    <img class="intro3" src="image/hes.jpg" width="30%">
   <a href="#"><p class="hair4">William
   </p>
   </a>
    
    <div class="d8"> </div>
    <img class="intro4" src="image/Anto.jpg" width="30%">
   <a href="#"><p class="hair5">Anton
   </p>
   </a>
   
   <div class="d9"> </div>
    <img class="intro5" src="image/PakKumis.jpg" width="30%">
   <a href="#"><p class="owner">Pak Kumis
   </p>
   </a>
    


</body>
<footer class="footer" style="margin-top: 800px">
        <div class="footer-left">
            <h3 style="margin-top:750px">Pak Kumis <br>Barbershop</h3>
        </div>
        <div class="footer-center">
			<p>
                <span style="font-size:18px"><b>Hubungi Kami</b></span>
            </p>
			<div>
                <img src="image/wa.png" class="fa fa-phone" height="30px" width="30px"></i>
                <p>+6285156968495</p>
            </div>
            <div>
                <img src="image/gmail.png" class="fa fa-envelope" height="40px" width="40px"></i>
                <p><a href="#">pakumis@gmail.com</a></p>
            </div>
            <div>
                <img src="image/map.png" class="fa fa-map-marker" height="80px" width="80px"></i>
                <p style="font-size:15px"><span>Balige</span>Jl. Kartini Atas Balige, Kabupaten Toba, Sumatera Utara</p>
            </div>	
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>Social Media</span>
            </p>
            <div class="footer-media">
				<a href="#"><img src="image/ig.png" class="fa fa-instagram" height="30px" width="30px"></i></a>
                <a href="#"><img src="image/fb.png" class="fa fa-facebook" height="30px" width="30px"></i></a>
            </div>
        </div>
		<center><p class="footer-copyright">Copyright Team 4 PSW II Institut Teknologi Del 2022</p></center>
    </footer>